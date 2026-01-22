<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListYmlsJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListYmlsJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configList  历史修改配置列表。
    * totalSize  **参数解释**： 配置任务数量。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configList' => '\HuaweiCloud\SDK\Css\V1\Model\ConfigListRsp[]',
            'totalSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configList  历史修改配置列表。
    * totalSize  **参数解释**： 配置任务数量。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configList' => null,
        'totalSize' => 'int32'
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
    * configList  历史修改配置列表。
    * totalSize  **参数解释**： 配置任务数量。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configList' => 'configList',
            'totalSize' => 'totalSize'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configList  历史修改配置列表。
    * totalSize  **参数解释**： 配置任务数量。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'configList' => 'setConfigList',
            'totalSize' => 'setTotalSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configList  历史修改配置列表。
    * totalSize  **参数解释**： 配置任务数量。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'configList' => 'getConfigList',
            'totalSize' => 'getTotalSize'
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
        $this->container['configList'] = isset($data['configList']) ? $data['configList'] : null;
        $this->container['totalSize'] = isset($data['totalSize']) ? $data['totalSize'] : null;
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
    * Gets configList
    *  历史修改配置列表。
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\ConfigListRsp[]|null
    */
    public function getConfigList()
    {
        return $this->container['configList'];
    }

    /**
    * Sets configList
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\ConfigListRsp[]|null $configList 历史修改配置列表。
    *
    * @return $this
    */
    public function setConfigList($configList)
    {
        $this->container['configList'] = $configList;
        return $this;
    }

    /**
    * Gets totalSize
    *  **参数解释**： 配置任务数量。 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getTotalSize()
    {
        return $this->container['totalSize'];
    }

    /**
    * Sets totalSize
    *
    * @param int|null $totalSize **参数解释**： 配置任务数量。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setTotalSize($totalSize)
    {
        $this->container['totalSize'] = $totalSize;
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

