<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPortStatusRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPortStatusRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operateType  **参数解释**: 端口状态，是否忽略 **约束限制**: 不涉及 **取值范围**: - ignore：忽略 - not_ignore：取消忽略  **默认取值**: 不涉及
    * dataList  **参数解释**: 主机相关信息列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operateType' => 'string',
            'dataList' => '\HuaweiCloud\SDK\Hss\V5\Model\PortStatusRequestInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operateType  **参数解释**: 端口状态，是否忽略 **约束限制**: 不涉及 **取值范围**: - ignore：忽略 - not_ignore：取消忽略  **默认取值**: 不涉及
    * dataList  **参数解释**: 主机相关信息列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operateType' => null,
        'dataList' => null
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
    * operateType  **参数解释**: 端口状态，是否忽略 **约束限制**: 不涉及 **取值范围**: - ignore：忽略 - not_ignore：取消忽略  **默认取值**: 不涉及
    * dataList  **参数解释**: 主机相关信息列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operateType' => 'operate_type',
            'dataList' => 'data_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operateType  **参数解释**: 端口状态，是否忽略 **约束限制**: 不涉及 **取值范围**: - ignore：忽略 - not_ignore：取消忽略  **默认取值**: 不涉及
    * dataList  **参数解释**: 主机相关信息列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'operateType' => 'setOperateType',
            'dataList' => 'setDataList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operateType  **参数解释**: 端口状态，是否忽略 **约束限制**: 不涉及 **取值范围**: - ignore：忽略 - not_ignore：取消忽略  **默认取值**: 不涉及
    * dataList  **参数解释**: 主机相关信息列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'operateType' => 'getOperateType',
            'dataList' => 'getDataList'
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
        $this->container['operateType'] = isset($data['operateType']) ? $data['operateType'] : null;
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
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
    * Gets operateType
    *  **参数解释**: 端口状态，是否忽略 **约束限制**: 不涉及 **取值范围**: - ignore：忽略 - not_ignore：取消忽略  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
    * Sets operateType
    *
    * @param string|null $operateType **参数解释**: 端口状态，是否忽略 **约束限制**: 不涉及 **取值范围**: - ignore：忽略 - not_ignore：取消忽略  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;
        return $this;
    }

    /**
    * Gets dataList
    *  **参数解释**: 主机相关信息列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**: 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\PortStatusRequestInfo[]|null
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\PortStatusRequestInfo[]|null $dataList **参数解释**: 主机相关信息列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
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

