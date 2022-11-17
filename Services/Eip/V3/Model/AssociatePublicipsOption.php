<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociatePublicipsOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociatePublicipsOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * associateInstanceType  功能说明：端口所属实例类型 取值范围：PORT、NATGW、VPN、ELB、null 约束：associate_instance_type和associate_instance_id都不为空时表示绑定实例； associate_instance_type和associate_instance_id都为null时解绑实例 约束：双栈公网IP不允许修改绑定的实例
    * associateInstanceId  功能说明：端口所属实例ID，例如RDS实例ID 约束：associate_instance_type和associate_instance_id都不为空时表示绑定实例； associate_instance_type和associate_instance_id都为null时解绑实例 约束：双栈公网IP不允许修改绑定的实例
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'associateInstanceType' => 'string',
            'associateInstanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * associateInstanceType  功能说明：端口所属实例类型 取值范围：PORT、NATGW、VPN、ELB、null 约束：associate_instance_type和associate_instance_id都不为空时表示绑定实例； associate_instance_type和associate_instance_id都为null时解绑实例 约束：双栈公网IP不允许修改绑定的实例
    * associateInstanceId  功能说明：端口所属实例ID，例如RDS实例ID 约束：associate_instance_type和associate_instance_id都不为空时表示绑定实例； associate_instance_type和associate_instance_id都为null时解绑实例 约束：双栈公网IP不允许修改绑定的实例
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'associateInstanceType' => null,
        'associateInstanceId' => null
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
    * associateInstanceType  功能说明：端口所属实例类型 取值范围：PORT、NATGW、VPN、ELB、null 约束：associate_instance_type和associate_instance_id都不为空时表示绑定实例； associate_instance_type和associate_instance_id都为null时解绑实例 约束：双栈公网IP不允许修改绑定的实例
    * associateInstanceId  功能说明：端口所属实例ID，例如RDS实例ID 约束：associate_instance_type和associate_instance_id都不为空时表示绑定实例； associate_instance_type和associate_instance_id都为null时解绑实例 约束：双栈公网IP不允许修改绑定的实例
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'associateInstanceType' => 'associate_instance_type',
            'associateInstanceId' => 'associate_instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * associateInstanceType  功能说明：端口所属实例类型 取值范围：PORT、NATGW、VPN、ELB、null 约束：associate_instance_type和associate_instance_id都不为空时表示绑定实例； associate_instance_type和associate_instance_id都为null时解绑实例 约束：双栈公网IP不允许修改绑定的实例
    * associateInstanceId  功能说明：端口所属实例ID，例如RDS实例ID 约束：associate_instance_type和associate_instance_id都不为空时表示绑定实例； associate_instance_type和associate_instance_id都为null时解绑实例 约束：双栈公网IP不允许修改绑定的实例
    *
    * @var string[]
    */
    protected static $setters = [
            'associateInstanceType' => 'setAssociateInstanceType',
            'associateInstanceId' => 'setAssociateInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * associateInstanceType  功能说明：端口所属实例类型 取值范围：PORT、NATGW、VPN、ELB、null 约束：associate_instance_type和associate_instance_id都不为空时表示绑定实例； associate_instance_type和associate_instance_id都为null时解绑实例 约束：双栈公网IP不允许修改绑定的实例
    * associateInstanceId  功能说明：端口所属实例ID，例如RDS实例ID 约束：associate_instance_type和associate_instance_id都不为空时表示绑定实例； associate_instance_type和associate_instance_id都为null时解绑实例 约束：双栈公网IP不允许修改绑定的实例
    *
    * @var string[]
    */
    protected static $getters = [
            'associateInstanceType' => 'getAssociateInstanceType',
            'associateInstanceId' => 'getAssociateInstanceId'
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
    const ASSOCIATE_INSTANCE_TYPE_PORT = 'PORT';
    const ASSOCIATE_INSTANCE_TYPE_NATGW = 'NATGW';
    const ASSOCIATE_INSTANCE_TYPE_VPN = 'VPN';
    const ASSOCIATE_INSTANCE_TYPE_ELB = 'ELB';
    const ASSOCIATE_INSTANCE_TYPE_EMPTY = '';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAssociateInstanceTypeAllowableValues()
    {
        return [
            self::ASSOCIATE_INSTANCE_TYPE_PORT,
            self::ASSOCIATE_INSTANCE_TYPE_NATGW,
            self::ASSOCIATE_INSTANCE_TYPE_VPN,
            self::ASSOCIATE_INSTANCE_TYPE_ELB,
            self::ASSOCIATE_INSTANCE_TYPE_EMPTY,
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
        $this->container['associateInstanceType'] = isset($data['associateInstanceType']) ? $data['associateInstanceType'] : null;
        $this->container['associateInstanceId'] = isset($data['associateInstanceId']) ? $data['associateInstanceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAssociateInstanceTypeAllowableValues();
                if (!is_null($this->container['associateInstanceType']) && !in_array($this->container['associateInstanceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'associateInstanceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['associateInstanceType']) && (mb_strlen($this->container['associateInstanceType']) > 36)) {
                $invalidProperties[] = "invalid value for 'associateInstanceType', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['associateInstanceType']) && (mb_strlen($this->container['associateInstanceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'associateInstanceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['associateInstanceId']) && (mb_strlen($this->container['associateInstanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'associateInstanceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['associateInstanceId']) && (mb_strlen($this->container['associateInstanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'associateInstanceId', the character length must be bigger than or equal to 0.";
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
    * Gets associateInstanceType
    *  功能说明：端口所属实例类型 取值范围：PORT、NATGW、VPN、ELB、null 约束：associate_instance_type和associate_instance_id都不为空时表示绑定实例； associate_instance_type和associate_instance_id都为null时解绑实例 约束：双栈公网IP不允许修改绑定的实例
    *
    * @return string|null
    */
    public function getAssociateInstanceType()
    {
        return $this->container['associateInstanceType'];
    }

    /**
    * Sets associateInstanceType
    *
    * @param string|null $associateInstanceType 功能说明：端口所属实例类型 取值范围：PORT、NATGW、VPN、ELB、null 约束：associate_instance_type和associate_instance_id都不为空时表示绑定实例； associate_instance_type和associate_instance_id都为null时解绑实例 约束：双栈公网IP不允许修改绑定的实例
    *
    * @return $this
    */
    public function setAssociateInstanceType($associateInstanceType)
    {
        $this->container['associateInstanceType'] = $associateInstanceType;
        return $this;
    }

    /**
    * Gets associateInstanceId
    *  功能说明：端口所属实例ID，例如RDS实例ID 约束：associate_instance_type和associate_instance_id都不为空时表示绑定实例； associate_instance_type和associate_instance_id都为null时解绑实例 约束：双栈公网IP不允许修改绑定的实例
    *
    * @return string|null
    */
    public function getAssociateInstanceId()
    {
        return $this->container['associateInstanceId'];
    }

    /**
    * Sets associateInstanceId
    *
    * @param string|null $associateInstanceId 功能说明：端口所属实例ID，例如RDS实例ID 约束：associate_instance_type和associate_instance_id都不为空时表示绑定实例； associate_instance_type和associate_instance_id都为null时解绑实例 约束：双栈公网IP不允许修改绑定的实例
    *
    * @return $this
    */
    public function setAssociateInstanceId($associateInstanceId)
    {
        $this->container['associateInstanceId'] = $associateInstanceId;
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

