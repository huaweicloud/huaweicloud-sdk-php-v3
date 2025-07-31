<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBaselineDirectoryResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBaselineDirectoryResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskCondition  taskCondition
    * baselineDirectoryList  **参数解释** 基线检查策略目录
    * pwdDirectoryList  **参数解释** 基线检查策略目录
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskCondition' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckTaskCondition',
            'baselineDirectoryList' => '\HuaweiCloud\SDK\Hss\V5\Model\ShowBaselineDirectoryInfo[]',
            'pwdDirectoryList' => '\HuaweiCloud\SDK\Hss\V5\Model\ShowPwdDirectoryInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskCondition  taskCondition
    * baselineDirectoryList  **参数解释** 基线检查策略目录
    * pwdDirectoryList  **参数解释** 基线检查策略目录
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskCondition' => null,
        'baselineDirectoryList' => null,
        'pwdDirectoryList' => null
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
    * taskCondition  taskCondition
    * baselineDirectoryList  **参数解释** 基线检查策略目录
    * pwdDirectoryList  **参数解释** 基线检查策略目录
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskCondition' => 'task_condition',
            'baselineDirectoryList' => 'baseline_directory_list',
            'pwdDirectoryList' => 'pwd_directory_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskCondition  taskCondition
    * baselineDirectoryList  **参数解释** 基线检查策略目录
    * pwdDirectoryList  **参数解释** 基线检查策略目录
    *
    * @var string[]
    */
    protected static $setters = [
            'taskCondition' => 'setTaskCondition',
            'baselineDirectoryList' => 'setBaselineDirectoryList',
            'pwdDirectoryList' => 'setPwdDirectoryList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskCondition  taskCondition
    * baselineDirectoryList  **参数解释** 基线检查策略目录
    * pwdDirectoryList  **参数解释** 基线检查策略目录
    *
    * @var string[]
    */
    protected static $getters = [
            'taskCondition' => 'getTaskCondition',
            'baselineDirectoryList' => 'getBaselineDirectoryList',
            'pwdDirectoryList' => 'getPwdDirectoryList'
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
        $this->container['taskCondition'] = isset($data['taskCondition']) ? $data['taskCondition'] : null;
        $this->container['baselineDirectoryList'] = isset($data['baselineDirectoryList']) ? $data['baselineDirectoryList'] : null;
        $this->container['pwdDirectoryList'] = isset($data['pwdDirectoryList']) ? $data['pwdDirectoryList'] : null;
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
    * Gets taskCondition
    *  taskCondition
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckTaskCondition|null
    */
    public function getTaskCondition()
    {
        return $this->container['taskCondition'];
    }

    /**
    * Sets taskCondition
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityCheckTaskCondition|null $taskCondition taskCondition
    *
    * @return $this
    */
    public function setTaskCondition($taskCondition)
    {
        $this->container['taskCondition'] = $taskCondition;
        return $this;
    }

    /**
    * Gets baselineDirectoryList
    *  **参数解释** 基线检查策略目录
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ShowBaselineDirectoryInfo[]|null
    */
    public function getBaselineDirectoryList()
    {
        return $this->container['baselineDirectoryList'];
    }

    /**
    * Sets baselineDirectoryList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ShowBaselineDirectoryInfo[]|null $baselineDirectoryList **参数解释** 基线检查策略目录
    *
    * @return $this
    */
    public function setBaselineDirectoryList($baselineDirectoryList)
    {
        $this->container['baselineDirectoryList'] = $baselineDirectoryList;
        return $this;
    }

    /**
    * Gets pwdDirectoryList
    *  **参数解释** 基线检查策略目录
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ShowPwdDirectoryInfo[]|null
    */
    public function getPwdDirectoryList()
    {
        return $this->container['pwdDirectoryList'];
    }

    /**
    * Sets pwdDirectoryList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ShowPwdDirectoryInfo[]|null $pwdDirectoryList **参数解释** 基线检查策略目录
    *
    * @return $this
    */
    public function setPwdDirectoryList($pwdDirectoryList)
    {
        $this->container['pwdDirectoryList'] = $pwdDirectoryList;
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

