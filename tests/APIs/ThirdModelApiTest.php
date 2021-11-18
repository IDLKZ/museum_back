<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\ThirdModel;

class ThirdModelApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_third_model()
    {
        $thirdModel = ThirdModel::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/third_models', $thirdModel
        );

        $this->assertApiResponse($thirdModel);
    }

    /**
     * @test
     */
    public function test_read_third_model()
    {
        $thirdModel = ThirdModel::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/third_models/'.$thirdModel->id
        );

        $this->assertApiResponse($thirdModel->toArray());
    }

    /**
     * @test
     */
    public function test_update_third_model()
    {
        $thirdModel = ThirdModel::factory()->create();
        $editedThirdModel = ThirdModel::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/third_models/'.$thirdModel->id,
            $editedThirdModel
        );

        $this->assertApiResponse($editedThirdModel);
    }

    /**
     * @test
     */
    public function test_delete_third_model()
    {
        $thirdModel = ThirdModel::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/third_models/'.$thirdModel->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/third_models/'.$thirdModel->id
        );

        $this->response->assertStatus(404);
    }
}
