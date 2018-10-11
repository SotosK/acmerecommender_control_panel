<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateActionScoreRequest;
use App\Http\Requests\UpdateActionScoreRequest;
use App\Models\ActionScore;
use App\Repositories\ActionScoreRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ActionScoreController extends AppBaseController
{
    /** @var  ActionScoreRepository */
    private $actionScoreRepository;

    public function __construct(ActionScoreRepository $actionScoreRepo)
    {
        $this->actionScoreRepository = $actionScoreRepo;
    }

    /**
     * Display a listing of the ActionScore.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->actionScoreRepository->pushCriteria(new RequestCriteria($request));
        $actionScores = ActionScore::whereIn("user_account_id",\Auth::user()->userAccounts()->pluck("id")->toArray())->get();

        return view('action_scores.index')
            ->with('actionScores', $actionScores);
    }

    /**
     * Show the form for creating a new ActionScore.
     *
     * @return Response
     */
    public function create()
    {
        return view('action_scores.create');
    }

    /**
     * Store a newly created ActionScore in storage.
     *
     * @param CreateActionScoreRequest $request
     *
     * @return Response
     */
    public function store(CreateActionScoreRequest $request)
    {
        $input = $request->all();

        $actionScore = $this->actionScoreRepository->create($input);

        Flash::success('Action Score saved successfully.');

        return redirect(route('actionScores.index'));
    }

    /**
     * Display the specified ActionScore.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $actionScore = $this->actionScoreRepository->findWithoutFail($id);

        if (empty($actionScore)) {
            Flash::error('Action Score not found');

            return redirect(route('actionScores.index'));
        }

        return view('action_scores.show')->with('actionScore', $actionScore);
    }

    /**
     * Show the form for editing the specified ActionScore.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $actionScore = $this->actionScoreRepository->findWithoutFail($id);

        if (empty($actionScore)) {
            Flash::error('Action Score not found');

            return redirect(route('actionScores.index'));
        }

        return view('action_scores.edit')->with('actionScore', $actionScore);
    }

    /**
     * Update the specified ActionScore in storage.
     *
     * @param  int              $id
     * @param UpdateActionScoreRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateActionScoreRequest $request)
    {
        $actionScore = $this->actionScoreRepository->findWithoutFail($id);

        if (empty($actionScore)) {
            Flash::error('Action Score not found');

            return redirect(route('actionScores.index'));
        }

        $actionScore = $this->actionScoreRepository->update($request->all(), $id);

        Flash::success('Action Score updated successfully.');

        return redirect(route('actionScores.index'));
    }

    /**
     * Remove the specified ActionScore from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $actionScore = $this->actionScoreRepository->findWithoutFail($id);

        if (empty($actionScore)) {
            Flash::error('Action Score not found');

            return redirect(route('actionScores.index'));
        }

        $this->actionScoreRepository->delete($id);

        Flash::success('Action Score deleted successfully.');

        return redirect(route('actionScores.index'));
    }
}
