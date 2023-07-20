<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnableConfigurationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnableConfigurationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configurationId  参数组ID。
    * configurationName  参数组名称。
    * success  参数模板是否都应用成功。  - “true”表示参数模板都应用成功。 - “false”表示存在应用失败的参数模板。
    * applyResults  对每个实例的应用结果。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configurationId' => 'string',
            'configurationName' => 'string',
            'success' => 'bool',
            'applyResults' => '\HuaweiCloud\SDK\Rds\V3\Model\ApplyConfigurationResponseApplyResults[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configurationId  参数组ID。
    * configurationName  参数组名称。
    * success  参数模板是否都应用成功。  - “true”表示参数模板都应用成功。 - “false”表示存在应用失败的参数模板。
    * applyResults  对每个实例的应用结果。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configurationId' => null,
        'configurationName' => null,
        'success' => null,
        'applyResults' => null
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
    * configurationId  参数组ID。
    * configurationName  参数组名称。
    * success  参数模板是否都应用成功。  - “true”表示参数模板都应用成功。 - “false”表示存在应用失败的参数模板。
    * applyResults  对每个实例的应用结果。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configurationId' => 'configuration_id',
            'configurationName' => 'configuration_name',
            'success' => 'success',
            'applyResults' => 'apply_results'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configurationId  参数组ID。
    * configurationName  参数组名称。
    * success  参数模板是否都应用成功。  - “true”表示参数模板都应用成功。 - “false”表示存在应用失败的参数模板。
    * applyResults  对每个实例的应用结果。
    *
    * @var string[]
    */
    protected static $setters = [
            'configurationId' => 'setConfigurationId',
            'configurationName' => 'setConfigurationName',
            'success' => 'setSuccess',
            'applyResults' => 'setApplyResults'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configurationId  参数组ID。
    * configurationName  参数组名称。
    * success  参数模板是否都应用成功。  - “true”表示参数模板都应用成功。 - “false”表示存在应用失败的参数模板。
    * applyResults  对每个实例的应用结果。
    *
    * @var string[]
    */
    protected static $getters = [
            'configurationId' => 'getConfigurationId',
            'configurationName' => 'getConfigurationName',
            'success' => 'getSuccess',
            'applyResults' => 'getApplyResults'
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
        $this->container['configurationId'] = isset($data['configurationId']) ? $data['configurationId'] : null;
        $this->container['configurationName'] = isset($data['configurationName']) ? $data['configurationName'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['applyResults'] = isset($data['applyResults']) ? $data['applyResults'] : null;
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
    * Gets configurationId
    *  参数组ID。
    *
    * @return string|null
    */
    public function getConfigurationId()
    {
        return $this->container['configurationId'];
    }

    /**
    * Sets configurationId
    *
    * @param string|null $configurationId 参数组ID。
    *
    * @return $this
    */
    public function setConfigurationId($configurationId)
    {
        $this->container['configurationId'] = $configurationId;
        return $this;
    }

    /**
    * Gets configurationName
    *  参数组名称。
    *
    * @return string|null
    */
    public function getConfigurationName()
    {
        return $this->container['configurationName'];
    }

    /**
    * Sets configurationName
    *
    * @param string|null $configurationName 参数组名称。
    *
    * @return $this
    */
    public function setConfigurationName($configurationName)
    {
        $this->container['configurationName'] = $configurationName;
        return $this;
    }

    /**
    * Gets success
    *  参数模板是否都应用成功。  - “true”表示参数模板都应用成功。 - “false”表示存在应用失败的参数模板。
    *
    * @return bool|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param bool|null $success 参数模板是否都应用成功。  - “true”表示参数模板都应用成功。 - “false”表示存在应用失败的参数模板。
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets applyResults
    *  对每个实例的应用结果。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ApplyConfigurationResponseApplyResults[]|null
    */
    public function getApplyResults()
    {
        return $this->container['applyResults'];
    }

    /**
    * Sets applyResults
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ApplyConfigurationResponseApplyResults[]|null $applyResults 对每个实例的应用结果。
    *
    * @return $this
    */
    public function setApplyResults($applyResults)
    {
        $this->container['applyResults'] = $applyResults;
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

