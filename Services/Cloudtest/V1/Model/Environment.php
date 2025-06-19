<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Environment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Environment';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * environmentId  环境分组id
    * environmentName  环境分组名
    * environmentDescription  环境分组描述
    * isDefault  是否是默认环境
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'environmentId' => 'string',
            'environmentName' => 'string',
            'environmentDescription' => 'string',
            'isDefault' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * environmentId  环境分组id
    * environmentName  环境分组名
    * environmentDescription  环境分组描述
    * isDefault  是否是默认环境
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'environmentId' => null,
        'environmentName' => null,
        'environmentDescription' => null,
        'isDefault' => null
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
    * environmentId  环境分组id
    * environmentName  环境分组名
    * environmentDescription  环境分组描述
    * isDefault  是否是默认环境
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'environmentId' => 'environment_id',
            'environmentName' => 'environment_name',
            'environmentDescription' => 'environment_description',
            'isDefault' => 'is_default'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * environmentId  环境分组id
    * environmentName  环境分组名
    * environmentDescription  环境分组描述
    * isDefault  是否是默认环境
    *
    * @var string[]
    */
    protected static $setters = [
            'environmentId' => 'setEnvironmentId',
            'environmentName' => 'setEnvironmentName',
            'environmentDescription' => 'setEnvironmentDescription',
            'isDefault' => 'setIsDefault'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * environmentId  环境分组id
    * environmentName  环境分组名
    * environmentDescription  环境分组描述
    * isDefault  是否是默认环境
    *
    * @var string[]
    */
    protected static $getters = [
            'environmentId' => 'getEnvironmentId',
            'environmentName' => 'getEnvironmentName',
            'environmentDescription' => 'getEnvironmentDescription',
            'isDefault' => 'getIsDefault'
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
        $this->container['environmentId'] = isset($data['environmentId']) ? $data['environmentId'] : null;
        $this->container['environmentName'] = isset($data['environmentName']) ? $data['environmentName'] : null;
        $this->container['environmentDescription'] = isset($data['environmentDescription']) ? $data['environmentDescription'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['environmentId']) && (mb_strlen($this->container['environmentId']) > 32)) {
                $invalidProperties[] = "invalid value for 'environmentId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['environmentId']) && (mb_strlen($this->container['environmentId']) < 32)) {
                $invalidProperties[] = "invalid value for 'environmentId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['environmentName']) && (mb_strlen($this->container['environmentName']) > 80)) {
                $invalidProperties[] = "invalid value for 'environmentName', the character length must be smaller than or equal to 80.";
            }
            if (!is_null($this->container['environmentName']) && (mb_strlen($this->container['environmentName']) < 3)) {
                $invalidProperties[] = "invalid value for 'environmentName', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['environmentDescription']) && (mb_strlen($this->container['environmentDescription']) > 500)) {
                $invalidProperties[] = "invalid value for 'environmentDescription', the character length must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['environmentDescription']) && (mb_strlen($this->container['environmentDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'environmentDescription', the character length must be bigger than or equal to 0.";
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
    * Gets environmentId
    *  环境分组id
    *
    * @return string|null
    */
    public function getEnvironmentId()
    {
        return $this->container['environmentId'];
    }

    /**
    * Sets environmentId
    *
    * @param string|null $environmentId 环境分组id
    *
    * @return $this
    */
    public function setEnvironmentId($environmentId)
    {
        $this->container['environmentId'] = $environmentId;
        return $this;
    }

    /**
    * Gets environmentName
    *  环境分组名
    *
    * @return string|null
    */
    public function getEnvironmentName()
    {
        return $this->container['environmentName'];
    }

    /**
    * Sets environmentName
    *
    * @param string|null $environmentName 环境分组名
    *
    * @return $this
    */
    public function setEnvironmentName($environmentName)
    {
        $this->container['environmentName'] = $environmentName;
        return $this;
    }

    /**
    * Gets environmentDescription
    *  环境分组描述
    *
    * @return string|null
    */
    public function getEnvironmentDescription()
    {
        return $this->container['environmentDescription'];
    }

    /**
    * Sets environmentDescription
    *
    * @param string|null $environmentDescription 环境分组描述
    *
    * @return $this
    */
    public function setEnvironmentDescription($environmentDescription)
    {
        $this->container['environmentDescription'] = $environmentDescription;
        return $this;
    }

    /**
    * Gets isDefault
    *  是否是默认环境
    *
    * @return bool|null
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param bool|null $isDefault 是否是默认环境
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
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

