<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateNaRequestDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateNaRequestDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  NA系统名称
    * description  北向NA系统描述
    * endpoint  访问URL地址
    * authType  鉴权方式
    * authAkskInfo  authAkskInfo
    * accessType  接入类型
    * accessRomaInfo  accessRomaInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'endpoint' => 'string',
            'authType' => 'string',
            'authAkskInfo' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\AuthAkSkInfo',
            'accessType' => 'string',
            'accessRomaInfo' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\AccessRomaInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  NA系统名称
    * description  北向NA系统描述
    * endpoint  访问URL地址
    * authType  鉴权方式
    * authAkskInfo  authAkskInfo
    * accessType  接入类型
    * accessRomaInfo  accessRomaInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'endpoint' => null,
        'authType' => null,
        'authAkskInfo' => null,
        'accessType' => null,
        'accessRomaInfo' => null
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
    * name  NA系统名称
    * description  北向NA系统描述
    * endpoint  访问URL地址
    * authType  鉴权方式
    * authAkskInfo  authAkskInfo
    * accessType  接入类型
    * accessRomaInfo  accessRomaInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'endpoint' => 'endpoint',
            'authType' => 'auth_type',
            'authAkskInfo' => 'auth_aksk_info',
            'accessType' => 'access_type',
            'accessRomaInfo' => 'access_roma_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  NA系统名称
    * description  北向NA系统描述
    * endpoint  访问URL地址
    * authType  鉴权方式
    * authAkskInfo  authAkskInfo
    * accessType  接入类型
    * accessRomaInfo  accessRomaInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'endpoint' => 'setEndpoint',
            'authType' => 'setAuthType',
            'authAkskInfo' => 'setAuthAkskInfo',
            'accessType' => 'setAccessType',
            'accessRomaInfo' => 'setAccessRomaInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  NA系统名称
    * description  北向NA系统描述
    * endpoint  访问URL地址
    * authType  鉴权方式
    * authAkskInfo  authAkskInfo
    * accessType  接入类型
    * accessRomaInfo  accessRomaInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'endpoint' => 'getEndpoint',
            'authType' => 'getAuthType',
            'authAkskInfo' => 'getAuthAkskInfo',
            'accessType' => 'getAccessType',
            'accessRomaInfo' => 'getAccessRomaInfo'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['authAkskInfo'] = isset($data['authAkskInfo']) ? $data['authAkskInfo'] : null;
        $this->container['accessType'] = isset($data['accessType']) ? $data['accessType'] : null;
        $this->container['accessRomaInfo'] = isset($data['accessRomaInfo']) ? $data['accessRomaInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[a-zA-Z0-9_；：？！，;:、,.?!\\-\\s\\u4e00-\\u9fa5]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[a-zA-Z0-9_；：？！，;:、,.?!\\-\\s\\u4e00-\\u9fa5]*$/.";
            }
        if ($this->container['endpoint'] === null) {
            $invalidProperties[] = "'endpoint' can't be null";
        }
            if ((mb_strlen($this->container['endpoint']) > 512)) {
                $invalidProperties[] = "invalid value for 'endpoint', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['endpoint']) < 1)) {
                $invalidProperties[] = "invalid value for 'endpoint', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/https?:\/\/(www\\.)?[-a-zA-Z0-9@:%._\\+~#=]{1,256}\\.[a-zA-Z0-9()]{1,6}\\b([-a-zA-Z0-9()!@:%_\\+.~#?&\/\/=]*)/", $this->container['endpoint'])) {
                $invalidProperties[] = "invalid value for 'endpoint', must be conform to the pattern /https?:\/\/(www\\.)?[-a-zA-Z0-9@:%._\\+~#=]{1,256}\\.[a-zA-Z0-9()]{1,6}\\b([-a-zA-Z0-9()!@:%_\\+.~#?&\/\/=]*)/.";
            }
            if (!is_null($this->container['authType']) && (mb_strlen($this->container['authType']) > 32)) {
                $invalidProperties[] = "invalid value for 'authType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['authType']) && (mb_strlen($this->container['authType']) < 1)) {
                $invalidProperties[] = "invalid value for 'authType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['authType']) && !preg_match("/(AKSK)/", $this->container['authType'])) {
                $invalidProperties[] = "invalid value for 'authType', must be conform to the pattern /(AKSK)/.";
            }
        if ($this->container['accessType'] === null) {
            $invalidProperties[] = "'accessType' can't be null";
        }
            if ((mb_strlen($this->container['accessType']) > 32)) {
                $invalidProperties[] = "invalid value for 'accessType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['accessType']) < 1)) {
                $invalidProperties[] = "invalid value for 'accessType', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/(ROMA|APIG)/", $this->container['accessType'])) {
                $invalidProperties[] = "invalid value for 'accessType', must be conform to the pattern /(ROMA|APIG)/.";
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
    * Gets name
    *  NA系统名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name NA系统名称
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
    *  北向NA系统描述
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
    * @param string|null $description 北向NA系统描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets endpoint
    *  访问URL地址
    *
    * @return string
    */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
    * Sets endpoint
    *
    * @param string $endpoint 访问URL地址
    *
    * @return $this
    */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;
        return $this;
    }

    /**
    * Gets authType
    *  鉴权方式
    *
    * @return string|null
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param string|null $authType 鉴权方式
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets authAkskInfo
    *  authAkskInfo
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\AuthAkSkInfo|null
    */
    public function getAuthAkskInfo()
    {
        return $this->container['authAkskInfo'];
    }

    /**
    * Sets authAkskInfo
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\AuthAkSkInfo|null $authAkskInfo authAkskInfo
    *
    * @return $this
    */
    public function setAuthAkskInfo($authAkskInfo)
    {
        $this->container['authAkskInfo'] = $authAkskInfo;
        return $this;
    }

    /**
    * Gets accessType
    *  接入类型
    *
    * @return string
    */
    public function getAccessType()
    {
        return $this->container['accessType'];
    }

    /**
    * Sets accessType
    *
    * @param string $accessType 接入类型
    *
    * @return $this
    */
    public function setAccessType($accessType)
    {
        $this->container['accessType'] = $accessType;
        return $this;
    }

    /**
    * Gets accessRomaInfo
    *  accessRomaInfo
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\AccessRomaInfo|null
    */
    public function getAccessRomaInfo()
    {
        return $this->container['accessRomaInfo'];
    }

    /**
    * Sets accessRomaInfo
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\AccessRomaInfo|null $accessRomaInfo accessRomaInfo
    *
    * @return $this
    */
    public function setAccessRomaInfo($accessRomaInfo)
    {
        $this->container['accessRomaInfo'] = $accessRomaInfo;
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

