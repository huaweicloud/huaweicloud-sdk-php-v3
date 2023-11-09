<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuthOpt implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuthOpt';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appCodeAuthType  AppCode简易认证类型，仅在auth_type为APP时生效，默认为DISABLE： - DISABLE：不开启简易认证 - HEADER：开启简易认证且AppCode位置在HEADER
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appCodeAuthType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appCodeAuthType  AppCode简易认证类型，仅在auth_type为APP时生效，默认为DISABLE： - DISABLE：不开启简易认证 - HEADER：开启简易认证且AppCode位置在HEADER
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appCodeAuthType' => null
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
    * appCodeAuthType  AppCode简易认证类型，仅在auth_type为APP时生效，默认为DISABLE： - DISABLE：不开启简易认证 - HEADER：开启简易认证且AppCode位置在HEADER
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appCodeAuthType' => 'app_code_auth_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appCodeAuthType  AppCode简易认证类型，仅在auth_type为APP时生效，默认为DISABLE： - DISABLE：不开启简易认证 - HEADER：开启简易认证且AppCode位置在HEADER
    *
    * @var string[]
    */
    protected static $setters = [
            'appCodeAuthType' => 'setAppCodeAuthType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appCodeAuthType  AppCode简易认证类型，仅在auth_type为APP时生效，默认为DISABLE： - DISABLE：不开启简易认证 - HEADER：开启简易认证且AppCode位置在HEADER
    *
    * @var string[]
    */
    protected static $getters = [
            'appCodeAuthType' => 'getAppCodeAuthType'
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
    const APP_CODE_AUTH_TYPE_DISABLE = 'DISABLE';
    const APP_CODE_AUTH_TYPE_HEADER = 'HEADER';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAppCodeAuthTypeAllowableValues()
    {
        return [
            self::APP_CODE_AUTH_TYPE_DISABLE,
            self::APP_CODE_AUTH_TYPE_HEADER,
        ];
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
        $this->container['appCodeAuthType'] = isset($data['appCodeAuthType']) ? $data['appCodeAuthType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAppCodeAuthTypeAllowableValues();
                if (!is_null($this->container['appCodeAuthType']) && !in_array($this->container['appCodeAuthType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'appCodeAuthType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets appCodeAuthType
    *  AppCode简易认证类型，仅在auth_type为APP时生效，默认为DISABLE： - DISABLE：不开启简易认证 - HEADER：开启简易认证且AppCode位置在HEADER
    *
    * @return string|null
    */
    public function getAppCodeAuthType()
    {
        return $this->container['appCodeAuthType'];
    }

    /**
    * Sets appCodeAuthType
    *
    * @param string|null $appCodeAuthType AppCode简易认证类型，仅在auth_type为APP时生效，默认为DISABLE： - DISABLE：不开启简易认证 - HEADER：开启简易认证且AppCode位置在HEADER
    *
    * @return $this
    */
    public function setAppCodeAuthType($appCodeAuthType)
    {
        $this->container['appCodeAuthType'] = $appCodeAuthType;
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

