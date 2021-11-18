<?php namespace Tests\Repositories;

use App\Models\ThirdModel;
use App\Repositories\ThirdModelRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ThirdModelRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ThirdModelRepository
     */
    protected $thirdModelRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->thirdModelRepo = \App::make(ThirdModelRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_third_model()
    {
        $thirdModel = ThirdModel::factory()->make()->toArray();

        $createdThirdModel = $this->thirdModelRepo->create($thirdModel);

        $createdThirdModel = $createdThirdModel->toArray();
        $this->assertArrayHasKey('id', $createdThirdModel);
        $this->assertNotNull($createdThirdModel['id'], 'Created ThirdModel must have id specified');
        $this->assertNotNull(ThirdModel::find($createdThirdModel['id']), 'ThirdModel with given id must be in DB');
        $this->assertModelData($thirdModel, $createdThirdModel);
    }

    /**
     * @test read
     */
    public function test_read_third_model()
    {
        $thirdModel = ThirdModel::factory()->create();

        $dbThirdModel = $this->thirdModelRepo->find($thirdModel->id);

        $dbThirdModel = $dbThirdModel->toArray();
        $this->assertModelData($thirdModel->toArray(), $dbThirdModel);
    }

    /**
     * @test update
     */
    public function test_update_third_model()
    {
        $thirdModel = ThirdModel::factory()->create();
        $fakeThirdModel = ThirdModel::factory()->make()->toArray();

        $updatedThirdModel = $this->thirdModelRepo->update($fakeThirdModel, $thirdModel->id);

        $this->assertModelData($fakeThirdModel, $updatedThirdModel->toArray());
        $dbThirdModel = $this->thirdModelRepo->find($thirdModel->id);
        $this->assertModelData($fakeThirdModel, $dbThirdModel->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_third_model()
    {
        $thirdModel = ThirdModel::factory()->create();

        $resp = $this->thirdModelRepo->delete($thirdModel->id);

        $this->assertTrue($resp);
        $this->assertNull(ThirdModel::find($thirdModel->id), 'ThirdModel should not exist in DB');
    }
}
