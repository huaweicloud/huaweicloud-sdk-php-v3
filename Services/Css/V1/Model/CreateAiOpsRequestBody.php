<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAiOpsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAiOpsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkType  **参数解释**： 检测类型 **约束限制**： 不涉及 **取值范围**： - full_detection  全量检测项 - unavailability_detection 集群不可用检测项 - partial_detection 全量检测项中选取其中部分检测项进行检测，具体检测项需要设置check_items  **默认取值**： 不涉及
    * checkItems  **参数解释**： 全量检测项中选取其中部分检测项进行检测，输入检测项列表。 **约束限制**： 当check_type为partial_detection时有效 **取值范围**： 通过智能运维ShowAiOpsDetector获取最新支持的检测项，输入检测项id字符串列表 **默认取值**： 不涉及
    * name  **参数解释**： 检测报告名称，支持自定义检测名。 **约束限制**： 不涉及 **取值范围**： 4～64个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。 **默认取值**： 不涉及
    * description  **参数解释**： 检测报告描述，支持自定义检测描述 **约束限制**： 不涉及 **取值范围**： 0~255个字符 **默认取值**： 不涉及
    * alarm  alarm
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkType' => 'string',
            'checkItems' => 'string[]',
            'name' => 'string',
            'description' => 'string',
            'alarm' => '\HuaweiCloud\SDK\Css\V1\Model\CreateAiOpsRequestBodyAlarm'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkType  **参数解释**： 检测类型 **约束限制**： 不涉及 **取值范围**： - full_detection  全量检测项 - unavailability_detection 集群不可用检测项 - partial_detection 全量检测项中选取其中部分检测项进行检测，具体检测项需要设置check_items  **默认取值**： 不涉及
    * checkItems  **参数解释**： 全量检测项中选取其中部分检测项进行检测，输入检测项列表。 **约束限制**： 当check_type为partial_detection时有效 **取值范围**： 通过智能运维ShowAiOpsDetector获取最新支持的检测项，输入检测项id字符串列表 **默认取值**： 不涉及
    * name  **参数解释**： 检测报告名称，支持自定义检测名。 **约束限制**： 不涉及 **取值范围**： 4～64个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。 **默认取值**： 不涉及
    * description  **参数解释**： 检测报告描述，支持自定义检测描述 **约束限制**： 不涉及 **取值范围**： 0~255个字符 **默认取值**： 不涉及
    * alarm  alarm
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkType' => null,
        'checkItems' => null,
        'name' => null,
        'description' => null,
        'alarm' => null
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
    * checkType  **参数解释**： 检测类型 **约束限制**： 不涉及 **取值范围**： - full_detection  全量检测项 - unavailability_detection 集群不可用检测项 - partial_detection 全量检测项中选取其中部分检测项进行检测，具体检测项需要设置check_items  **默认取值**： 不涉及
    * checkItems  **参数解释**： 全量检测项中选取其中部分检测项进行检测，输入检测项列表。 **约束限制**： 当check_type为partial_detection时有效 **取值范围**： 通过智能运维ShowAiOpsDetector获取最新支持的检测项，输入检测项id字符串列表 **默认取值**： 不涉及
    * name  **参数解释**： 检测报告名称，支持自定义检测名。 **约束限制**： 不涉及 **取值范围**： 4～64个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。 **默认取值**： 不涉及
    * description  **参数解释**： 检测报告描述，支持自定义检测描述 **约束限制**： 不涉及 **取值范围**： 0~255个字符 **默认取值**： 不涉及
    * alarm  alarm
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkType' => 'check_type',
            'checkItems' => 'check_items',
            'name' => 'name',
            'description' => 'description',
            'alarm' => 'alarm'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkType  **参数解释**： 检测类型 **约束限制**： 不涉及 **取值范围**： - full_detection  全量检测项 - unavailability_detection 集群不可用检测项 - partial_detection 全量检测项中选取其中部分检测项进行检测，具体检测项需要设置check_items  **默认取值**： 不涉及
    * checkItems  **参数解释**： 全量检测项中选取其中部分检测项进行检测，输入检测项列表。 **约束限制**： 当check_type为partial_detection时有效 **取值范围**： 通过智能运维ShowAiOpsDetector获取最新支持的检测项，输入检测项id字符串列表 **默认取值**： 不涉及
    * name  **参数解释**： 检测报告名称，支持自定义检测名。 **约束限制**： 不涉及 **取值范围**： 4～64个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。 **默认取值**： 不涉及
    * description  **参数解释**： 检测报告描述，支持自定义检测描述 **约束限制**： 不涉及 **取值范围**： 0~255个字符 **默认取值**： 不涉及
    * alarm  alarm
    *
    * @var string[]
    */
    protected static $setters = [
            'checkType' => 'setCheckType',
            'checkItems' => 'setCheckItems',
            'name' => 'setName',
            'description' => 'setDescription',
            'alarm' => 'setAlarm'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkType  **参数解释**： 检测类型 **约束限制**： 不涉及 **取值范围**： - full_detection  全量检测项 - unavailability_detection 集群不可用检测项 - partial_detection 全量检测项中选取其中部分检测项进行检测，具体检测项需要设置check_items  **默认取值**： 不涉及
    * checkItems  **参数解释**： 全量检测项中选取其中部分检测项进行检测，输入检测项列表。 **约束限制**： 当check_type为partial_detection时有效 **取值范围**： 通过智能运维ShowAiOpsDetector获取最新支持的检测项，输入检测项id字符串列表 **默认取值**： 不涉及
    * name  **参数解释**： 检测报告名称，支持自定义检测名。 **约束限制**： 不涉及 **取值范围**： 4～64个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。 **默认取值**： 不涉及
    * description  **参数解释**： 检测报告描述，支持自定义检测描述 **约束限制**： 不涉及 **取值范围**： 0~255个字符 **默认取值**： 不涉及
    * alarm  alarm
    *
    * @var string[]
    */
    protected static $getters = [
            'checkType' => 'getCheckType',
            'checkItems' => 'getCheckItems',
            'name' => 'getName',
            'description' => 'getDescription',
            'alarm' => 'getAlarm'
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
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
        $this->container['checkItems'] = isset($data['checkItems']) ? $data['checkItems'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['alarm'] = isset($data['alarm']) ? $data['alarm'] : null;
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
    * Gets checkType
    *  **参数解释**： 检测类型 **约束限制**： 不涉及 **取值范围**： - full_detection  全量检测项 - unavailability_detection 集群不可用检测项 - partial_detection 全量检测项中选取其中部分检测项进行检测，具体检测项需要设置check_items  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getCheckType()
    {
        return $this->container['checkType'];
    }

    /**
    * Sets checkType
    *
    * @param string|null $checkType **参数解释**： 检测类型 **约束限制**： 不涉及 **取值范围**： - full_detection  全量检测项 - unavailability_detection 集群不可用检测项 - partial_detection 全量检测项中选取其中部分检测项进行检测，具体检测项需要设置check_items  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setCheckType($checkType)
    {
        $this->container['checkType'] = $checkType;
        return $this;
    }

    /**
    * Gets checkItems
    *  **参数解释**： 全量检测项中选取其中部分检测项进行检测，输入检测项列表。 **约束限制**： 当check_type为partial_detection时有效 **取值范围**： 通过智能运维ShowAiOpsDetector获取最新支持的检测项，输入检测项id字符串列表 **默认取值**： 不涉及
    *
    * @return string[]|null
    */
    public function getCheckItems()
    {
        return $this->container['checkItems'];
    }

    /**
    * Sets checkItems
    *
    * @param string[]|null $checkItems **参数解释**： 全量检测项中选取其中部分检测项进行检测，输入检测项列表。 **约束限制**： 当check_type为partial_detection时有效 **取值范围**： 通过智能运维ShowAiOpsDetector获取最新支持的检测项，输入检测项id字符串列表 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setCheckItems($checkItems)
    {
        $this->container['checkItems'] = $checkItems;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 检测报告名称，支持自定义检测名。 **约束限制**： 不涉及 **取值范围**： 4～64个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。 **默认取值**： 不涉及
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
    * @param string|null $name **参数解释**： 检测报告名称，支持自定义检测名。 **约束限制**： 不涉及 **取值范围**： 4～64个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。 **默认取值**： 不涉及
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
    *  **参数解释**： 检测报告描述，支持自定义检测描述 **约束限制**： 不涉及 **取值范围**： 0~255个字符 **默认取值**： 不涉及
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
    * @param string|null $description **参数解释**： 检测报告描述，支持自定义检测描述 **约束限制**： 不涉及 **取值范围**： 0~255个字符 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets alarm
    *  alarm
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\CreateAiOpsRequestBodyAlarm|null
    */
    public function getAlarm()
    {
        return $this->container['alarm'];
    }

    /**
    * Sets alarm
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\CreateAiOpsRequestBodyAlarm|null $alarm alarm
    *
    * @return $this
    */
    public function setAlarm($alarm)
    {
        $this->container['alarm'] = $alarm;
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

