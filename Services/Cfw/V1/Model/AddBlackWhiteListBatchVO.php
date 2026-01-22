<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddBlackWhiteListBatchVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddBlackWhiteListBatchVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * duplicatedList  **参数解释**： 黑白名单重复添加列表 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * failedList  **参数解释**： 黑白名单添加失败列表 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * successList  **参数解释**： 黑白名单添加成功列表 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'duplicatedList' => '\HuaweiCloud\SDK\Cfw\V1\Model\BlackWhiteInfo[]',
            'failedList' => '\HuaweiCloud\SDK\Cfw\V1\Model\BlackWhiteInfo[]',
            'successList' => '\HuaweiCloud\SDK\Cfw\V1\Model\BlackWhiteInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * duplicatedList  **参数解释**： 黑白名单重复添加列表 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * failedList  **参数解释**： 黑白名单添加失败列表 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * successList  **参数解释**： 黑白名单添加成功列表 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'duplicatedList' => null,
        'failedList' => null,
        'successList' => null
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
    * duplicatedList  **参数解释**： 黑白名单重复添加列表 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * failedList  **参数解释**： 黑白名单添加失败列表 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * successList  **参数解释**： 黑白名单添加成功列表 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'duplicatedList' => 'duplicated_list',
            'failedList' => 'failed_list',
            'successList' => 'success_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * duplicatedList  **参数解释**： 黑白名单重复添加列表 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * failedList  **参数解释**： 黑白名单添加失败列表 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * successList  **参数解释**： 黑白名单添加成功列表 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'duplicatedList' => 'setDuplicatedList',
            'failedList' => 'setFailedList',
            'successList' => 'setSuccessList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * duplicatedList  **参数解释**： 黑白名单重复添加列表 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * failedList  **参数解释**： 黑白名单添加失败列表 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * successList  **参数解释**： 黑白名单添加成功列表 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'duplicatedList' => 'getDuplicatedList',
            'failedList' => 'getFailedList',
            'successList' => 'getSuccessList'
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
        $this->container['duplicatedList'] = isset($data['duplicatedList']) ? $data['duplicatedList'] : null;
        $this->container['failedList'] = isset($data['failedList']) ? $data['failedList'] : null;
        $this->container['successList'] = isset($data['successList']) ? $data['successList'] : null;
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
    * Gets duplicatedList
    *  **参数解释**： 黑白名单重复添加列表 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\BlackWhiteInfo[]|null
    */
    public function getDuplicatedList()
    {
        return $this->container['duplicatedList'];
    }

    /**
    * Sets duplicatedList
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\BlackWhiteInfo[]|null $duplicatedList **参数解释**： 黑白名单重复添加列表 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDuplicatedList($duplicatedList)
    {
        $this->container['duplicatedList'] = $duplicatedList;
        return $this;
    }

    /**
    * Gets failedList
    *  **参数解释**： 黑白名单添加失败列表 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\BlackWhiteInfo[]|null
    */
    public function getFailedList()
    {
        return $this->container['failedList'];
    }

    /**
    * Sets failedList
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\BlackWhiteInfo[]|null $failedList **参数解释**： 黑白名单添加失败列表 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setFailedList($failedList)
    {
        $this->container['failedList'] = $failedList;
        return $this;
    }

    /**
    * Gets successList
    *  **参数解释**： 黑白名单添加成功列表 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\BlackWhiteInfo[]|null
    */
    public function getSuccessList()
    {
        return $this->container['successList'];
    }

    /**
    * Sets successList
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\BlackWhiteInfo[]|null $successList **参数解释**： 黑白名单添加成功列表 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setSuccessList($successList)
    {
        $this->container['successList'] = $successList;
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

