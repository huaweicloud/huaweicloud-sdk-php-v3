<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppRequestDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppRequestDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appType  应用类型
    * name  应用名称
    * description  应用描述
    * apigType  网关类型
    * apigInstanceId  网关实例编号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appType' => 'string',
            'name' => 'string',
            'description' => 'string',
            'apigType' => 'string',
            'apigInstanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appType  应用类型
    * name  应用名称
    * description  应用描述
    * apigType  网关类型
    * apigInstanceId  网关实例编号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appType' => null,
        'name' => null,
        'description' => null,
        'apigType' => null,
        'apigInstanceId' => null
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
    * appType  应用类型
    * name  应用名称
    * description  应用描述
    * apigType  网关类型
    * apigInstanceId  网关实例编号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appType' => 'app_type',
            'name' => 'name',
            'description' => 'description',
            'apigType' => 'apig_type',
            'apigInstanceId' => 'apig_instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appType  应用类型
    * name  应用名称
    * description  应用描述
    * apigType  网关类型
    * apigInstanceId  网关实例编号
    *
    * @var string[]
    */
    protected static $setters = [
            'appType' => 'setAppType',
            'name' => 'setName',
            'description' => 'setDescription',
            'apigType' => 'setApigType',
            'apigInstanceId' => 'setApigInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appType  应用类型
    * name  应用名称
    * description  应用描述
    * apigType  网关类型
    * apigInstanceId  网关实例编号
    *
    * @var string[]
    */
    protected static $getters = [
            'appType' => 'getAppType',
            'name' => 'getName',
            'description' => 'getDescription',
            'apigType' => 'getApigType',
            'apigInstanceId' => 'getApigInstanceId'
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
    const APP_TYPE_APIG = 'APIG';
    const APP_TYPE_IAM = 'IAM';
    const APP_TYPE_APIGW = 'APIGW';
    const APP_TYPE_DLM = 'DLM';
    const APP_TYPE_ROMA_APIC = 'ROMA_APIC';
    const APIG_TYPE_APIG = 'APIG';
    const APIG_TYPE_APIGW = 'APIGW';
    const APIG_TYPE_ROMA_APIC = 'ROMA_APIC';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAppTypeAllowableValues()
    {
        return [
            self::APP_TYPE_APIG,
            self::APP_TYPE_IAM,
            self::APP_TYPE_APIGW,
            self::APP_TYPE_DLM,
            self::APP_TYPE_ROMA_APIC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApigTypeAllowableValues()
    {
        return [
            self::APIG_TYPE_APIG,
            self::APIG_TYPE_APIGW,
            self::APIG_TYPE_ROMA_APIC,
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
        $this->container['appType'] = isset($data['appType']) ? $data['appType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['apigType'] = isset($data['apigType']) ? $data['apigType'] : null;
        $this->container['apigInstanceId'] = isset($data['apigInstanceId']) ? $data['apigInstanceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAppTypeAllowableValues();
                if (!is_null($this->container['appType']) && !in_array($this->container['appType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'appType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getApigTypeAllowableValues();
                if (!is_null($this->container['apigType']) && !in_array($this->container['apigType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'apigType', must be one of '%s'",
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
    * Gets appType
    *  应用类型
    *
    * @return string|null
    */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
    * Sets appType
    *
    * @param string|null $appType 应用类型
    *
    * @return $this
    */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;
        return $this;
    }

    /**
    * Gets name
    *  应用名称
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
    * @param string|null $name 应用名称
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
    * Gets apigType
    *  网关类型
    *
    * @return string|null
    */
    public function getApigType()
    {
        return $this->container['apigType'];
    }

    /**
    * Sets apigType
    *
    * @param string|null $apigType 网关类型
    *
    * @return $this
    */
    public function setApigType($apigType)
    {
        $this->container['apigType'] = $apigType;
        return $this;
    }

    /**
    * Gets apigInstanceId
    *  网关实例编号
    *
    * @return string|null
    */
    public function getApigInstanceId()
    {
        return $this->container['apigInstanceId'];
    }

    /**
    * Sets apigInstanceId
    *
    * @param string|null $apigInstanceId 网关实例编号
    *
    * @return $this
    */
    public function setApigInstanceId($apigInstanceId)
    {
        $this->container['apigInstanceId'] = $apigInstanceId;
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

