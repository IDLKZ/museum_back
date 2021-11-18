<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateThirdModelAPIRequest;
use App\Http\Requests\API\UpdateThirdModelAPIRequest;
use App\Models\ThirdModel;
use App\Repositories\ThirdModelRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ThirdModelController
 * @package App\Http\Controllers\API
 */

class ThirdModelAPIController extends AppBaseController
{
    /** @var  ThirdModelRepository */
    private $thirdModelRepository;

    public function __construct(ThirdModelRepository $thirdModelRepo)
    {
        $this->thirdModelRepository = $thirdModelRepo;
    }

    /**
     * Display a listing of the ThirdModel.
     * GET|HEAD /thirdModels
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $thirdModels = $this->thirdModelRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($thirdModels->toArray(), 'Third Models retrieved successfully');
    }

    /**
     * Store a newly created ThirdModel in storage.
     * POST /thirdModels
     *
     * @param CreateThirdModelAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateThirdModelAPIRequest $request)
    {
        $input = $request->all();

        $thirdModel = $this->thirdModelRepository->create($input);

        return $this->sendResponse($thirdModel->toArray(), 'Third Model saved successfully');
    }

    /**
     * Display the specified ThirdModel.
     * GET|HEAD /thirdModels/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ThirdModel $thirdModel */
        $thirdModel = $this->thirdModelRepository->find($id);

        if (empty($thirdModel)) {
            return $this->sendError('Third Model not found');
        }

        return $this->sendResponse($thirdModel->toArray(), 'Third Model retrieved successfully');
    }

    /**
     * Update the specified ThirdModel in storage.
     * PUT/PATCH /thirdModels/{id}
     *
     * @param int $id
     * @param UpdateThirdModelAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateThirdModelAPIRequest $request)
    {
        $input = $request->all();

        /** @var ThirdModel $thirdModel */
        $thirdModel = $this->thirdModelRepository->find($id);

        if (empty($thirdModel)) {
            return $this->sendError('Third Model not found');
        }

        $thirdModel = $this->thirdModelRepository->update($input, $id);

        return $this->sendResponse($thirdModel->toArray(), 'ThirdModel updated successfully');
    }

    /**
     * Remove the specified ThirdModel from storage.
     * DELETE /thirdModels/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ThirdModel $thirdModel */
        $thirdModel = $this->thirdModelRepository->find($id);

        if (empty($thirdModel)) {
            return $this->sendError('Third Model not found');
        }

        $thirdModel->delete();

        return $this->sendSuccess('Third Model deleted successfully');
    }
}
