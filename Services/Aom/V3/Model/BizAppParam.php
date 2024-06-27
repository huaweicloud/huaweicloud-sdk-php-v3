<?php

namespace HuaweiCloud\SDK\Aom\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BizAppParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BizAppParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  应用描述
    * displayName  应用名称.字符集长度2-64，仅支持字符集：中文字符、英文字母、数字、下划线、中划线、点
    * epsId  应用关联的企业项目id。企业级用户必传
    * name  唯一标识.字符集长度2-64，仅支持字符集：英文字母、数字、下划线、中划线、点
    * registerType  前端默认是CONSOLE，不需要传参。rest接口无参数是API，有参数只能是：SERVICE_DISCOVERY
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'displayName' => 'string',
            'epsId' => 'string',
            'name' => 'string',
            'registerType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  应用描述
    * displayName  应用名称.字符集长度2-64，仅支持字符集：中文字符、英文字母、数字、下划线、中划线、点
    * epsId  应用关联的企业项目id。企业级用户必传
    * name  唯一标识.字符集长度2-64，仅支持字符集：英文字母、数字、下划线、中划线、点
    * registerType  前端默认是CONSOLE，不需要传参。rest接口无参数是API，有参数只能是：SERVICE_DISCOVERY
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'displayName' => null,
        'epsId' => null,
        'name' => null,
        'registerType' => null
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
    * description  应用描述
    * displayName  应用名称.字符集长度2-64，仅支持字符集：中文字符、英文字母、数字、下划线、中划线、点
    * epsId  应用关联的企业项目id。企业级用户必传
    * name  唯一标识.字符集长度2-64，仅支持字符集：英文字母、数字、下划线、中划线、点
    * registerType  前端默认是CONSOLE，不需要传参。rest接口无参数是API，有参数只能是：SERVICE_DISCOVERY
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'displayName' => 'display_name',
            'epsId' => 'eps_id',
            'name' => 'name',
            'registerType' => 'register_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  应用描述
    * displayName  应用名称.字符集长度2-64，仅支持字符集：中文字符、英文字母、数字、下划线、中划线、点
    * epsId  应用关联的企业项目id。企业级用户必传
    * name  唯一标识.字符集长度2-64，仅支持字符集：英文字母、数字、下划线、中划线、点
    * registerType  前端默认是CONSOLE，不需要传参。rest接口无参数是API，有参数只能是：SERVICE_DISCOVERY
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'displayName' => 'setDisplayName',
            'epsId' => 'setEpsId',
            'name' => 'setName',
            'registerType' => 'setRegisterType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  应用描述
    * displayName  应用名称.字符集长度2-64，仅支持字符集：中文字符、英文字母、数字、下划线、中划线、点
    * epsId  应用关联的企业项目id。企业级用户必传
    * name  唯一标识.字符集长度2-64，仅支持字符集：英文字母、数字、下划线、中划线、点
    * registerType  前端默认是CONSOLE，不需要传参。rest接口无参数是API，有参数只能是：SERVICE_DISCOVERY
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'displayName' => 'getDisplayName',
            'epsId' => 'getEpsId',
            'name' => 'getName',
            'registerType' => 'getRegisterType'
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
    const REGISTER_TYPE_API = 'API';
    const REGISTER_TYPE_CONSOLESERVICE_DISCOVERY = 'CONSOLESERVICE_DISCOVERY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRegisterTypeAllowableValues()
    {
        return [
            self::REGISTER_TYPE_API,
            self::REGISTER_TYPE_CONSOLESERVICE_DISCOVERY,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['epsId'] = isset($data['epsId']) ? $data['epsId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['registerType'] = isset($data['registerType']) ? $data['registerType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) > 64)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) < 2)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['epsId']) && !preg_match("/^[a-zA-Z0-9\\-]{36}$/", $this->container['epsId'])) {
                $invalidProperties[] = "invalid value for 'epsId', must be conform to the pattern /^[a-zA-Z0-9\\-]{36}$/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9\\-]{32,36}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9\\-]{32,36}$/.";
            }
            $allowedValues = $this->getRegisterTypeAllowableValues();
                if (!is_null($this->container['registerType']) && !in_array($this->container['registerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'registerType', must be one of '%s'",
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
    * Gets description
    *  应用描述
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
    * @param string|null $description 应用描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets displayName
    *  应用名称.字符集长度2-64，仅支持字符集：中文字符、英文字母、数字、下划线、中划线、点
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 应用名称.字符集长度2-64，仅支持字符集：中文字符、英文字母、数字、下划线、中划线、点
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets epsId
    *  应用关联的企业项目id。企业级用户必传
    *
    * @return string|null
    */
    public function getEpsId()
    {
        return $this->container['epsId'];
    }

    /**
    * Sets epsId
    *
    * @param string|null $epsId 应用关联的企业项目id。企业级用户必传
    *
    * @return $this
    */
    public function setEpsId($epsId)
    {
        $this->container['epsId'] = $epsId;
        return $this;
    }

    /**
    * Gets name
    *  唯一标识.字符集长度2-64，仅支持字符集：英文字母、数字、下划线、中划线、点
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
    * @param string $name 唯一标识.字符集长度2-64，仅支持字符集：英文字母、数字、下划线、中划线、点
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets registerType
    *  前端默认是CONSOLE，不需要传参。rest接口无参数是API，有参数只能是：SERVICE_DISCOVERY
    *
    * @return string|null
    */
    public function getRegisterType()
    {
        return $this->container['registerType'];
    }

    /**
    * Sets registerType
    *
    * @param string|null $registerType 前端默认是CONSOLE，不需要传参。rest接口无参数是API，有参数只能是：SERVICE_DISCOVERY
    *
    * @return $this
    */
    public function setRegisterType($registerType)
    {
        $this->container['registerType'] = $registerType;
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

