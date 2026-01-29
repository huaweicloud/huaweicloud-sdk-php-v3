<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PlanVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PlanVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** id（发布、迭代、里程碑的id） **取值范围：** 不涉及
    * title  **参数解释：** 标题 **取值范围：** 不涉及
    * category  **参数解释：** 分类，枚举类型 **取值范围：** - PI：发布 - Iteration：迭代 - PlanMilestone：里程碑
    * description  **参数解释：** 描述 **取值范围：** 不涉及
    * state  **参数解释：** 作废标识，枚举类型。 **取值范围：** - 正在工作：可正常操作的发布 - 作废：软删除后的发布，可在回收站恢复 - 删除：彻底删除后的发布，无法恢复
    * status  **参数解释：** 发布/迭代的状态，枚举类型。 **取值范围：** - planned：发布/计划未开始 - going：发布/计划进行中 - ended：发布/计划已结束
    * children  **参数解释：** 子项目迭代信息
    * createdBy  **参数解释：** 创建人Id **取值范围：** 不涉及
    * modifiedBy  **参数解释：** 最近更新人Id **取值范围：** 不涉及
    * planStartDate  **参数解释：** 计划开始时间，\"yyyy-MM-dd\"格式 **取值范围：** 不涉及
    * planEndDate  **参数解释：** 计划完成时间，\"yyyy-MM-dd\"格式 **取值范围：** 不涉及
    * createdDate  **参数解释：** 创建时间，unix时间戳，单位：毫秒 **取值范围：** 不涉及
    * parentId  **参数解释：** 父工作项id **取值范围：** 不涉及
    * baseline  **参数解释：** 基线状态，枚举类型 **取值范围：** - baselined：已基线 - unbaseline：未基线 - baseline-reviewing：基线评审中
    * workload  **参数解释：** 预估工作量 **取值范围：** 不涉及
    * owner  **参数解释：** 责任人ID **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'title' => 'string',
            'category' => 'string',
            'description' => 'string',
            'state' => 'string',
            'status' => 'string',
            'children' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\PlanVO[]',
            'createdBy' => 'string',
            'modifiedBy' => 'string',
            'planStartDate' => 'string',
            'planEndDate' => 'string',
            'createdDate' => 'int',
            'parentId' => 'string',
            'baseline' => 'string',
            'workload' => 'string',
            'owner' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** id（发布、迭代、里程碑的id） **取值范围：** 不涉及
    * title  **参数解释：** 标题 **取值范围：** 不涉及
    * category  **参数解释：** 分类，枚举类型 **取值范围：** - PI：发布 - Iteration：迭代 - PlanMilestone：里程碑
    * description  **参数解释：** 描述 **取值范围：** 不涉及
    * state  **参数解释：** 作废标识，枚举类型。 **取值范围：** - 正在工作：可正常操作的发布 - 作废：软删除后的发布，可在回收站恢复 - 删除：彻底删除后的发布，无法恢复
    * status  **参数解释：** 发布/迭代的状态，枚举类型。 **取值范围：** - planned：发布/计划未开始 - going：发布/计划进行中 - ended：发布/计划已结束
    * children  **参数解释：** 子项目迭代信息
    * createdBy  **参数解释：** 创建人Id **取值范围：** 不涉及
    * modifiedBy  **参数解释：** 最近更新人Id **取值范围：** 不涉及
    * planStartDate  **参数解释：** 计划开始时间，\"yyyy-MM-dd\"格式 **取值范围：** 不涉及
    * planEndDate  **参数解释：** 计划完成时间，\"yyyy-MM-dd\"格式 **取值范围：** 不涉及
    * createdDate  **参数解释：** 创建时间，unix时间戳，单位：毫秒 **取值范围：** 不涉及
    * parentId  **参数解释：** 父工作项id **取值范围：** 不涉及
    * baseline  **参数解释：** 基线状态，枚举类型 **取值范围：** - baselined：已基线 - unbaseline：未基线 - baseline-reviewing：基线评审中
    * workload  **参数解释：** 预估工作量 **取值范围：** 不涉及
    * owner  **参数解释：** 责任人ID **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'title' => null,
        'category' => null,
        'description' => null,
        'state' => null,
        'status' => null,
        'children' => null,
        'createdBy' => null,
        'modifiedBy' => null,
        'planStartDate' => null,
        'planEndDate' => null,
        'createdDate' => 'int64',
        'parentId' => null,
        'baseline' => null,
        'workload' => null,
        'owner' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * id  **参数解释：** id（发布、迭代、里程碑的id） **取值范围：** 不涉及
    * title  **参数解释：** 标题 **取值范围：** 不涉及
    * category  **参数解释：** 分类，枚举类型 **取值范围：** - PI：发布 - Iteration：迭代 - PlanMilestone：里程碑
    * description  **参数解释：** 描述 **取值范围：** 不涉及
    * state  **参数解释：** 作废标识，枚举类型。 **取值范围：** - 正在工作：可正常操作的发布 - 作废：软删除后的发布，可在回收站恢复 - 删除：彻底删除后的发布，无法恢复
    * status  **参数解释：** 发布/迭代的状态，枚举类型。 **取值范围：** - planned：发布/计划未开始 - going：发布/计划进行中 - ended：发布/计划已结束
    * children  **参数解释：** 子项目迭代信息
    * createdBy  **参数解释：** 创建人Id **取值范围：** 不涉及
    * modifiedBy  **参数解释：** 最近更新人Id **取值范围：** 不涉及
    * planStartDate  **参数解释：** 计划开始时间，\"yyyy-MM-dd\"格式 **取值范围：** 不涉及
    * planEndDate  **参数解释：** 计划完成时间，\"yyyy-MM-dd\"格式 **取值范围：** 不涉及
    * createdDate  **参数解释：** 创建时间，unix时间戳，单位：毫秒 **取值范围：** 不涉及
    * parentId  **参数解释：** 父工作项id **取值范围：** 不涉及
    * baseline  **参数解释：** 基线状态，枚举类型 **取值范围：** - baselined：已基线 - unbaseline：未基线 - baseline-reviewing：基线评审中
    * workload  **参数解释：** 预估工作量 **取值范围：** 不涉及
    * owner  **参数解释：** 责任人ID **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'title' => 'title',
            'category' => 'category',
            'description' => 'description',
            'state' => 'state',
            'status' => 'status',
            'children' => 'children',
            'createdBy' => 'created_by',
            'modifiedBy' => 'modified_by',
            'planStartDate' => 'plan_start_date',
            'planEndDate' => 'plan_end_date',
            'createdDate' => 'created_date',
            'parentId' => 'parent_id',
            'baseline' => 'baseline',
            'workload' => 'workload',
            'owner' => 'owner'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** id（发布、迭代、里程碑的id） **取值范围：** 不涉及
    * title  **参数解释：** 标题 **取值范围：** 不涉及
    * category  **参数解释：** 分类，枚举类型 **取值范围：** - PI：发布 - Iteration：迭代 - PlanMilestone：里程碑
    * description  **参数解释：** 描述 **取值范围：** 不涉及
    * state  **参数解释：** 作废标识，枚举类型。 **取值范围：** - 正在工作：可正常操作的发布 - 作废：软删除后的发布，可在回收站恢复 - 删除：彻底删除后的发布，无法恢复
    * status  **参数解释：** 发布/迭代的状态，枚举类型。 **取值范围：** - planned：发布/计划未开始 - going：发布/计划进行中 - ended：发布/计划已结束
    * children  **参数解释：** 子项目迭代信息
    * createdBy  **参数解释：** 创建人Id **取值范围：** 不涉及
    * modifiedBy  **参数解释：** 最近更新人Id **取值范围：** 不涉及
    * planStartDate  **参数解释：** 计划开始时间，\"yyyy-MM-dd\"格式 **取值范围：** 不涉及
    * planEndDate  **参数解释：** 计划完成时间，\"yyyy-MM-dd\"格式 **取值范围：** 不涉及
    * createdDate  **参数解释：** 创建时间，unix时间戳，单位：毫秒 **取值范围：** 不涉及
    * parentId  **参数解释：** 父工作项id **取值范围：** 不涉及
    * baseline  **参数解释：** 基线状态，枚举类型 **取值范围：** - baselined：已基线 - unbaseline：未基线 - baseline-reviewing：基线评审中
    * workload  **参数解释：** 预估工作量 **取值范围：** 不涉及
    * owner  **参数解释：** 责任人ID **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'title' => 'setTitle',
            'category' => 'setCategory',
            'description' => 'setDescription',
            'state' => 'setState',
            'status' => 'setStatus',
            'children' => 'setChildren',
            'createdBy' => 'setCreatedBy',
            'modifiedBy' => 'setModifiedBy',
            'planStartDate' => 'setPlanStartDate',
            'planEndDate' => 'setPlanEndDate',
            'createdDate' => 'setCreatedDate',
            'parentId' => 'setParentId',
            'baseline' => 'setBaseline',
            'workload' => 'setWorkload',
            'owner' => 'setOwner'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** id（发布、迭代、里程碑的id） **取值范围：** 不涉及
    * title  **参数解释：** 标题 **取值范围：** 不涉及
    * category  **参数解释：** 分类，枚举类型 **取值范围：** - PI：发布 - Iteration：迭代 - PlanMilestone：里程碑
    * description  **参数解释：** 描述 **取值范围：** 不涉及
    * state  **参数解释：** 作废标识，枚举类型。 **取值范围：** - 正在工作：可正常操作的发布 - 作废：软删除后的发布，可在回收站恢复 - 删除：彻底删除后的发布，无法恢复
    * status  **参数解释：** 发布/迭代的状态，枚举类型。 **取值范围：** - planned：发布/计划未开始 - going：发布/计划进行中 - ended：发布/计划已结束
    * children  **参数解释：** 子项目迭代信息
    * createdBy  **参数解释：** 创建人Id **取值范围：** 不涉及
    * modifiedBy  **参数解释：** 最近更新人Id **取值范围：** 不涉及
    * planStartDate  **参数解释：** 计划开始时间，\"yyyy-MM-dd\"格式 **取值范围：** 不涉及
    * planEndDate  **参数解释：** 计划完成时间，\"yyyy-MM-dd\"格式 **取值范围：** 不涉及
    * createdDate  **参数解释：** 创建时间，unix时间戳，单位：毫秒 **取值范围：** 不涉及
    * parentId  **参数解释：** 父工作项id **取值范围：** 不涉及
    * baseline  **参数解释：** 基线状态，枚举类型 **取值范围：** - baselined：已基线 - unbaseline：未基线 - baseline-reviewing：基线评审中
    * workload  **参数解释：** 预估工作量 **取值范围：** 不涉及
    * owner  **参数解释：** 责任人ID **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'title' => 'getTitle',
            'category' => 'getCategory',
            'description' => 'getDescription',
            'state' => 'getState',
            'status' => 'getStatus',
            'children' => 'getChildren',
            'createdBy' => 'getCreatedBy',
            'modifiedBy' => 'getModifiedBy',
            'planStartDate' => 'getPlanStartDate',
            'planEndDate' => 'getPlanEndDate',
            'createdDate' => 'getCreatedDate',
            'parentId' => 'getParentId',
            'baseline' => 'getBaseline',
            'workload' => 'getWorkload',
            'owner' => 'getOwner'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['planStartDate'] = isset($data['planStartDate']) ? $data['planStartDate'] : null;
        $this->container['planEndDate'] = isset($data['planEndDate']) ? $data['planEndDate'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['baseline'] = isset($data['baseline']) ? $data['baseline'] : null;
        $this->container['workload'] = isset($data['workload']) ? $data['workload'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 19)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 18)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 256)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 16)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 2)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 8)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 2)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 2)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) > 32)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) < 32)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['modifiedBy']) && (mb_strlen($this->container['modifiedBy']) > 32)) {
                $invalidProperties[] = "invalid value for 'modifiedBy', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['modifiedBy']) && (mb_strlen($this->container['modifiedBy']) < 0)) {
                $invalidProperties[] = "invalid value for 'modifiedBy', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) > 19)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) < 18)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['baseline']) && (mb_strlen($this->container['baseline']) > 32)) {
                $invalidProperties[] = "invalid value for 'baseline', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['baseline']) && (mb_strlen($this->container['baseline']) < 0)) {
                $invalidProperties[] = "invalid value for 'baseline', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workload']) && (mb_strlen($this->container['workload']) > 11)) {
                $invalidProperties[] = "invalid value for 'workload', the character length must be smaller than or equal to 11.";
            }
            if (!is_null($this->container['workload']) && (mb_strlen($this->container['workload']) < 0)) {
                $invalidProperties[] = "invalid value for 'workload', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) > 32)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) < 32)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be bigger than or equal to 32.";
            }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets id
    *  **参数解释：** id（发布、迭代、里程碑的id） **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释：** id（发布、迭代、里程碑的id） **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets title
    *  **参数解释：** 标题 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title **参数解释：** 标题 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释：** 分类，枚举类型 **取值范围：** - PI：发布 - Iteration：迭代 - PlanMilestone：里程碑
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释：** 分类，枚举类型 **取值范围：** - PI：发布 - Iteration：迭代 - PlanMilestone：里程碑
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 描述 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释：** 描述 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释：** 作废标识，枚举类型。 **取值范围：** - 正在工作：可正常操作的发布 - 作废：软删除后的发布，可在回收站恢复 - 删除：彻底删除后的发布，无法恢复
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state **参数解释：** 作废标识，枚举类型。 **取值范围：** - 正在工作：可正常操作的发布 - 作废：软删除后的发布，可在回收站恢复 - 删除：彻底删除后的发布，无法恢复
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 发布/迭代的状态，枚举类型。 **取值范围：** - planned：发布/计划未开始 - going：发布/计划进行中 - ended：发布/计划已结束
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释：** 发布/迭代的状态，枚举类型。 **取值范围：** - planned：发布/计划未开始 - going：发布/计划进行中 - ended：发布/计划已结束
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets children
    *  **参数解释：** 子项目迭代信息
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\PlanVO[]|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\PlanVO[]|null $children **参数解释：** 子项目迭代信息
    *
    * @return $this
    */
    public function setChildren($children)
    {
        $this->container['children'] = $children;
        return $this;
    }

    /**
    * Gets createdBy
    *  **参数解释：** 创建人Id **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy **参数解释：** 创建人Id **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  **参数解释：** 最近更新人Id **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
    * Sets modifiedBy
    *
    * @param string|null $modifiedBy **参数解释：** 最近更新人Id **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;
        return $this;
    }

    /**
    * Gets planStartDate
    *  **参数解释：** 计划开始时间，\"yyyy-MM-dd\"格式 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getPlanStartDate()
    {
        return $this->container['planStartDate'];
    }

    /**
    * Sets planStartDate
    *
    * @param string|null $planStartDate **参数解释：** 计划开始时间，\"yyyy-MM-dd\"格式 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setPlanStartDate($planStartDate)
    {
        $this->container['planStartDate'] = $planStartDate;
        return $this;
    }

    /**
    * Gets planEndDate
    *  **参数解释：** 计划完成时间，\"yyyy-MM-dd\"格式 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getPlanEndDate()
    {
        return $this->container['planEndDate'];
    }

    /**
    * Sets planEndDate
    *
    * @param string|null $planEndDate **参数解释：** 计划完成时间，\"yyyy-MM-dd\"格式 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setPlanEndDate($planEndDate)
    {
        $this->container['planEndDate'] = $planEndDate;
        return $this;
    }

    /**
    * Gets createdDate
    *  **参数解释：** 创建时间，unix时间戳，单位：毫秒 **取值范围：** 不涉及
    *
    * @return int|null
    */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
    * Sets createdDate
    *
    * @param int|null $createdDate **参数解释：** 创建时间，unix时间戳，单位：毫秒 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
    * Gets parentId
    *  **参数解释：** 父工作项id **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId **参数解释：** 父工作项id **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets baseline
    *  **参数解释：** 基线状态，枚举类型 **取值范围：** - baselined：已基线 - unbaseline：未基线 - baseline-reviewing：基线评审中
    *
    * @return string|null
    */
    public function getBaseline()
    {
        return $this->container['baseline'];
    }

    /**
    * Sets baseline
    *
    * @param string|null $baseline **参数解释：** 基线状态，枚举类型 **取值范围：** - baselined：已基线 - unbaseline：未基线 - baseline-reviewing：基线评审中
    *
    * @return $this
    */
    public function setBaseline($baseline)
    {
        $this->container['baseline'] = $baseline;
        return $this;
    }

    /**
    * Gets workload
    *  **参数解释：** 预估工作量 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getWorkload()
    {
        return $this->container['workload'];
    }

    /**
    * Sets workload
    *
    * @param string|null $workload **参数解释：** 预估工作量 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setWorkload($workload)
    {
        $this->container['workload'] = $workload;
        return $this;
    }

    /**
    * Gets owner
    *  **参数解释：** 责任人ID **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner **参数解释：** 责任人ID **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

