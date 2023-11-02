<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GatewayDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GatewayDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * apigType  网关类型
    * apigInstanceId  网关实例id
    * groupIdInApig  网关分组id
    * romaAppId  roma网关集成应用id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'apigType' => 'string',
            'apigInstanceId' => 'string',
            'groupIdInApig' => 'string',
            'romaAppId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * apigType  网关类型
    * apigInstanceId  网关实例id
    * groupIdInApig  网关分组id
    * romaAppId  roma网关集成应用id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'apigType' => null,
        'apigInstanceId' => null,
        'groupIdInApig' => null,
        'romaAppId' => null
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
    * apigType  网关类型
    * apigInstanceId  网关实例id
    * groupIdInApig  网关分组id
    * romaAppId  roma网关集成应用id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'apigType' => 'apig_type',
            'apigInstanceId' => 'apig_instance_id',
            'groupIdInApig' => 'group_id_in_apig',
            'romaAppId' => 'roma_app_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * apigType  网关类型
    * apigInstanceId  网关实例id
    * groupIdInApig  网关分组id
    * romaAppId  roma网关集成应用id
    *
    * @var string[]
    */
    protected static $setters = [
            'apigType' => 'setApigType',
            'apigInstanceId' => 'setApigInstanceId',
            'groupIdInApig' => 'setGroupIdInApig',
            'romaAppId' => 'setRomaAppId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * apigType  网关类型
    * apigInstanceId  网关实例id
    * groupIdInApig  网关分组id
    * romaAppId  roma网关集成应用id
    *
    * @var string[]
    */
    protected static $getters = [
            'apigType' => 'getApigType',
            'apigInstanceId' => 'getApigInstanceId',
            'groupIdInApig' => 'getGroupIdInApig',
            'romaAppId' => 'getRomaAppId'
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
    const APIG_TYPE_APIG = 'APIG';
    const APIG_TYPE_APIGW = 'APIGW';
    const APIG_TYPE_ROMA_APIC = 'ROMA_APIC';
    

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
        $this->container['apigType'] = isset($data['apigType']) ? $data['apigType'] : null;
        $this->container['apigInstanceId'] = isset($data['apigInstanceId']) ? $data['apigInstanceId'] : null;
        $this->container['groupIdInApig'] = isset($data['groupIdInApig']) ? $data['groupIdInApig'] : null;
        $this->container['romaAppId'] = isset($data['romaAppId']) ? $data['romaAppId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  网关实例id
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
    * @param string|null $apigInstanceId 网关实例id
    *
    * @return $this
    */
    public function setApigInstanceId($apigInstanceId)
    {
        $this->container['apigInstanceId'] = $apigInstanceId;
        return $this;
    }

    /**
    * Gets groupIdInApig
    *  网关分组id
    *
    * @return string|null
    */
    public function getGroupIdInApig()
    {
        return $this->container['groupIdInApig'];
    }

    /**
    * Sets groupIdInApig
    *
    * @param string|null $groupIdInApig 网关分组id
    *
    * @return $this
    */
    public function setGroupIdInApig($groupIdInApig)
    {
        $this->container['groupIdInApig'] = $groupIdInApig;
        return $this;
    }

    /**
    * Gets romaAppId
    *  roma网关集成应用id
    *
    * @return string|null
    */
    public function getRomaAppId()
    {
        return $this->container['romaAppId'];
    }

    /**
    * Sets romaAppId
    *
    * @param string|null $romaAppId roma网关集成应用id
    *
    * @return $this
    */
    public function setRomaAppId($romaAppId)
    {
        $this->container['romaAppId'] = $romaAppId;
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

