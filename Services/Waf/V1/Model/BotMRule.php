<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BotMRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BotMRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 规则ID，唯一标识当前BotM规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 规则名称，用于标识当前BotM规则的名称。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 规则描述，对当前BotM规则的功能说明。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * features  **参数解释：** 规则列表，当前BotM规则包含的具体检测特征。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * category  **参数解释：** 规则所属类别，标识规则的一级分类（如0表示基础检测类）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subCategory  **参数解释：** 规则所属子类别，标识规则的二级分类（如0表示已知Bot子类）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * defenseAction  **参数解释：** 规则对应的防护动作，标识触发规则后执行的动作（如0表示放行）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * createdTime  **参数解释：** 规则创建的时间，时间戳（毫秒级）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * modifiedTime  **参数解释：** 规则更新的时间，时间戳（毫秒级）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 规则目前是否被启用（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * interactionConfidence  **参数解释：** 交互置信度，标识主动交互检测的置信度阈值。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'description' => 'string',
            'features' => 'string[]',
            'category' => 'int',
            'subCategory' => 'int',
            'defenseAction' => 'int',
            'createdTime' => 'int',
            'modifiedTime' => 'int',
            'status' => 'bool',
            'interactionConfidence' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 规则ID，唯一标识当前BotM规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 规则名称，用于标识当前BotM规则的名称。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 规则描述，对当前BotM规则的功能说明。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * features  **参数解释：** 规则列表，当前BotM规则包含的具体检测特征。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * category  **参数解释：** 规则所属类别，标识规则的一级分类（如0表示基础检测类）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subCategory  **参数解释：** 规则所属子类别，标识规则的二级分类（如0表示已知Bot子类）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * defenseAction  **参数解释：** 规则对应的防护动作，标识触发规则后执行的动作（如0表示放行）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * createdTime  **参数解释：** 规则创建的时间，时间戳（毫秒级）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * modifiedTime  **参数解释：** 规则更新的时间，时间戳（毫秒级）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 规则目前是否被启用（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * interactionConfidence  **参数解释：** 交互置信度，标识主动交互检测的置信度阈值。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'name' => null,
        'description' => null,
        'features' => null,
        'category' => 'int32',
        'subCategory' => 'int32',
        'defenseAction' => 'int32',
        'createdTime' => 'int64',
        'modifiedTime' => 'int64',
        'status' => null,
        'interactionConfidence' => null
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
    * id  **参数解释：** 规则ID，唯一标识当前BotM规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 规则名称，用于标识当前BotM规则的名称。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 规则描述，对当前BotM规则的功能说明。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * features  **参数解释：** 规则列表，当前BotM规则包含的具体检测特征。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * category  **参数解释：** 规则所属类别，标识规则的一级分类（如0表示基础检测类）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subCategory  **参数解释：** 规则所属子类别，标识规则的二级分类（如0表示已知Bot子类）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * defenseAction  **参数解释：** 规则对应的防护动作，标识触发规则后执行的动作（如0表示放行）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * createdTime  **参数解释：** 规则创建的时间，时间戳（毫秒级）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * modifiedTime  **参数解释：** 规则更新的时间，时间戳（毫秒级）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 规则目前是否被启用（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * interactionConfidence  **参数解释：** 交互置信度，标识主动交互检测的置信度阈值。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'features' => 'features',
            'category' => 'category',
            'subCategory' => 'sub_category',
            'defenseAction' => 'defense_action',
            'createdTime' => 'created_time',
            'modifiedTime' => 'modified_time',
            'status' => 'status',
            'interactionConfidence' => 'interaction_confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 规则ID，唯一标识当前BotM规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 规则名称，用于标识当前BotM规则的名称。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 规则描述，对当前BotM规则的功能说明。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * features  **参数解释：** 规则列表，当前BotM规则包含的具体检测特征。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * category  **参数解释：** 规则所属类别，标识规则的一级分类（如0表示基础检测类）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subCategory  **参数解释：** 规则所属子类别，标识规则的二级分类（如0表示已知Bot子类）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * defenseAction  **参数解释：** 规则对应的防护动作，标识触发规则后执行的动作（如0表示放行）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * createdTime  **参数解释：** 规则创建的时间，时间戳（毫秒级）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * modifiedTime  **参数解释：** 规则更新的时间，时间戳（毫秒级）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 规则目前是否被启用（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * interactionConfidence  **参数解释：** 交互置信度，标识主动交互检测的置信度阈值。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'features' => 'setFeatures',
            'category' => 'setCategory',
            'subCategory' => 'setSubCategory',
            'defenseAction' => 'setDefenseAction',
            'createdTime' => 'setCreatedTime',
            'modifiedTime' => 'setModifiedTime',
            'status' => 'setStatus',
            'interactionConfidence' => 'setInteractionConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 规则ID，唯一标识当前BotM规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 规则名称，用于标识当前BotM规则的名称。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 规则描述，对当前BotM规则的功能说明。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * features  **参数解释：** 规则列表，当前BotM规则包含的具体检测特征。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * category  **参数解释：** 规则所属类别，标识规则的一级分类（如0表示基础检测类）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subCategory  **参数解释：** 规则所属子类别，标识规则的二级分类（如0表示已知Bot子类）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * defenseAction  **参数解释：** 规则对应的防护动作，标识触发规则后执行的动作（如0表示放行）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * createdTime  **参数解释：** 规则创建的时间，时间戳（毫秒级）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * modifiedTime  **参数解释：** 规则更新的时间，时间戳（毫秒级）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 规则目前是否被启用（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * interactionConfidence  **参数解释：** 交互置信度，标识主动交互检测的置信度阈值。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'features' => 'getFeatures',
            'category' => 'getCategory',
            'subCategory' => 'getSubCategory',
            'defenseAction' => 'getDefenseAction',
            'createdTime' => 'getCreatedTime',
            'modifiedTime' => 'getModifiedTime',
            'status' => 'getStatus',
            'interactionConfidence' => 'getInteractionConfidence'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['subCategory'] = isset($data['subCategory']) ? $data['subCategory'] : null;
        $this->container['defenseAction'] = isset($data['defenseAction']) ? $data['defenseAction'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['modifiedTime'] = isset($data['modifiedTime']) ? $data['modifiedTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['interactionConfidence'] = isset($data['interactionConfidence']) ? $data['interactionConfidence'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  **参数解释：** 规则ID，唯一标识当前BotM规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 规则ID，唯一标识当前BotM规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 规则名称，用于标识当前BotM规则的名称。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释：** 规则名称，用于标识当前BotM规则的名称。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 规则描述，对当前BotM规则的功能说明。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $description **参数解释：** 规则描述，对当前BotM规则的功能说明。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets features
    *  **参数解释：** 规则列表，当前BotM规则包含的具体检测特征。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
    * Sets features
    *
    * @param string[]|null $features **参数解释：** 规则列表，当前BotM规则包含的具体检测特征。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释：** 规则所属类别，标识规则的一级分类（如0表示基础检测类）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param int|null $category **参数解释：** 规则所属类别，标识规则的一级分类（如0表示基础检测类）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets subCategory
    *  **参数解释：** 规则所属子类别，标识规则的二级分类（如0表示已知Bot子类）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getSubCategory()
    {
        return $this->container['subCategory'];
    }

    /**
    * Sets subCategory
    *
    * @param int|null $subCategory **参数解释：** 规则所属子类别，标识规则的二级分类（如0表示已知Bot子类）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSubCategory($subCategory)
    {
        $this->container['subCategory'] = $subCategory;
        return $this;
    }

    /**
    * Gets defenseAction
    *  **参数解释：** 规则对应的防护动作，标识触发规则后执行的动作（如0表示放行）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getDefenseAction()
    {
        return $this->container['defenseAction'];
    }

    /**
    * Sets defenseAction
    *
    * @param int|null $defenseAction **参数解释：** 规则对应的防护动作，标识触发规则后执行的动作（如0表示放行）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDefenseAction($defenseAction)
    {
        $this->container['defenseAction'] = $defenseAction;
        return $this;
    }

    /**
    * Gets createdTime
    *  **参数解释：** 规则创建的时间，时间戳（毫秒级）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param int|null $createdTime **参数解释：** 规则创建的时间，时间戳（毫秒级）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets modifiedTime
    *  **参数解释：** 规则更新的时间，时间戳（毫秒级）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getModifiedTime()
    {
        return $this->container['modifiedTime'];
    }

    /**
    * Sets modifiedTime
    *
    * @param int|null $modifiedTime **参数解释：** 规则更新的时间，时间戳（毫秒级）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setModifiedTime($modifiedTime)
    {
        $this->container['modifiedTime'] = $modifiedTime;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 规则目前是否被启用（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return bool|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param bool|null $status **参数解释：** 规则目前是否被启用（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets interactionConfidence
    *  **参数解释：** 交互置信度，标识主动交互检测的置信度阈值。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getInteractionConfidence()
    {
        return $this->container['interactionConfidence'];
    }

    /**
    * Sets interactionConfidence
    *
    * @param int|null $interactionConfidence **参数解释：** 交互置信度，标识主动交互检测的置信度阈值。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setInteractionConfidence($interactionConfidence)
    {
        $this->container['interactionConfidence'] = $interactionConfidence;
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

