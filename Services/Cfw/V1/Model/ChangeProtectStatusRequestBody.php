<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeProtectStatusRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeProtectStatusRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * objectId  **参数解释**： 防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * status  **参数解释**： VPC边界防护状态 **约束限制**： 不涉及 **取值范围**： 0- 开启防护、1- 关闭防护 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'objectId' => 'string',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * objectId  **参数解释**： 防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * status  **参数解释**： VPC边界防护状态 **约束限制**： 不涉及 **取值范围**： 0- 开启防护、1- 关闭防护 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'objectId' => null,
        'status' => 'int32'
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
    * objectId  **参数解释**： 防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * status  **参数解释**： VPC边界防护状态 **约束限制**： 不涉及 **取值范围**： 0- 开启防护、1- 关闭防护 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'objectId' => 'object_id',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * objectId  **参数解释**： 防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * status  **参数解释**： VPC边界防护状态 **约束限制**： 不涉及 **取值范围**： 0- 开启防护、1- 关闭防护 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'objectId' => 'setObjectId',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * objectId  **参数解释**： 防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * status  **参数解释**： VPC边界防护状态 **约束限制**： 不涉及 **取值范围**： 0- 开启防护、1- 关闭防护 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'objectId' => 'getObjectId',
            'status' => 'getStatus'
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
    const STATUS_0 = 0;
    const STATUS_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_0,
            self::STATUS_1,
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
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['objectId'] === null) {
            $invalidProperties[] = "'objectId' can't be null";
        }
            if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->container['objectId'])) {
                $invalidProperties[] = "invalid value for 'objectId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets objectId
    *  **参数解释**： 防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @return string
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string $objectId **参数解释**： 防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： VPC边界防护状态 **约束限制**： 不涉及 **取值范围**： 0- 开启防护、1- 关闭防护 **默认取值**： 不涉及
    *
    * @return int
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int $status **参数解释**： VPC边界防护状态 **约束限制**： 不涉及 **取值范围**： 0- 开启防护、1- 关闭防护 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

