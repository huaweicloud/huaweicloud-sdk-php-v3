<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TransferKeyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TransferKeyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  **参数解释：** 待转移的密钥ID **约束限制：** 满足正则表达式^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$ **取值范围：** 不涉及 **默认取值：** 不涉及
    * targetKeyspaceId  **参数解释：** 目标密钥空间ID **约束限制：** 满足正则表达式^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$ **取值范围：** 不涉及 **默认取值：** 不涉及
    * transferMode  **参数解释：** 转移模式 **约束限制：** ASSIGN模式仅支持对称密钥，且密钥必须未属于任何密钥空间，目标密钥空间类型需与密钥所属keystore类型匹配； **取值范围：** - ASSIGN：将密钥分配给目标密钥空间 **默认取值：** ASSIGN
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'string',
            'targetKeyspaceId' => 'string',
            'transferMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  **参数解释：** 待转移的密钥ID **约束限制：** 满足正则表达式^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$ **取值范围：** 不涉及 **默认取值：** 不涉及
    * targetKeyspaceId  **参数解释：** 目标密钥空间ID **约束限制：** 满足正则表达式^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$ **取值范围：** 不涉及 **默认取值：** 不涉及
    * transferMode  **参数解释：** 转移模式 **约束限制：** ASSIGN模式仅支持对称密钥，且密钥必须未属于任何密钥空间，目标密钥空间类型需与密钥所属keystore类型匹配； **取值范围：** - ASSIGN：将密钥分配给目标密钥空间 **默认取值：** ASSIGN
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => null,
        'targetKeyspaceId' => null,
        'transferMode' => null
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
    * keyId  **参数解释：** 待转移的密钥ID **约束限制：** 满足正则表达式^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$ **取值范围：** 不涉及 **默认取值：** 不涉及
    * targetKeyspaceId  **参数解释：** 目标密钥空间ID **约束限制：** 满足正则表达式^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$ **取值范围：** 不涉及 **默认取值：** 不涉及
    * transferMode  **参数解释：** 转移模式 **约束限制：** ASSIGN模式仅支持对称密钥，且密钥必须未属于任何密钥空间，目标密钥空间类型需与密钥所属keystore类型匹配； **取值范围：** - ASSIGN：将密钥分配给目标密钥空间 **默认取值：** ASSIGN
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id',
            'targetKeyspaceId' => 'target_keyspace_id',
            'transferMode' => 'transfer_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  **参数解释：** 待转移的密钥ID **约束限制：** 满足正则表达式^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$ **取值范围：** 不涉及 **默认取值：** 不涉及
    * targetKeyspaceId  **参数解释：** 目标密钥空间ID **约束限制：** 满足正则表达式^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$ **取值范围：** 不涉及 **默认取值：** 不涉及
    * transferMode  **参数解释：** 转移模式 **约束限制：** ASSIGN模式仅支持对称密钥，且密钥必须未属于任何密钥空间，目标密钥空间类型需与密钥所属keystore类型匹配； **取值范围：** - ASSIGN：将密钥分配给目标密钥空间 **默认取值：** ASSIGN
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId',
            'targetKeyspaceId' => 'setTargetKeyspaceId',
            'transferMode' => 'setTransferMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  **参数解释：** 待转移的密钥ID **约束限制：** 满足正则表达式^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$ **取值范围：** 不涉及 **默认取值：** 不涉及
    * targetKeyspaceId  **参数解释：** 目标密钥空间ID **约束限制：** 满足正则表达式^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$ **取值范围：** 不涉及 **默认取值：** 不涉及
    * transferMode  **参数解释：** 转移模式 **约束限制：** ASSIGN模式仅支持对称密钥，且密钥必须未属于任何密钥空间，目标密钥空间类型需与密钥所属keystore类型匹配； **取值范围：** - ASSIGN：将密钥分配给目标密钥空间 **默认取值：** ASSIGN
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId',
            'targetKeyspaceId' => 'getTargetKeyspaceId',
            'transferMode' => 'getTransferMode'
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
    const TRANSFER_MODE_ASSIGN = 'ASSIGN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTransferModeAllowableValues()
    {
        return [
            self::TRANSFER_MODE_ASSIGN,
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
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['targetKeyspaceId'] = isset($data['targetKeyspaceId']) ? $data['targetKeyspaceId'] : null;
        $this->container['transferMode'] = isset($data['transferMode']) ? $data['transferMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['keyId'] === null) {
            $invalidProperties[] = "'keyId' can't be null";
        }
            if ((mb_strlen($this->container['keyId']) > 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['keyId']) < 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['targetKeyspaceId'] === null) {
            $invalidProperties[] = "'targetKeyspaceId' can't be null";
        }
            if ((mb_strlen($this->container['targetKeyspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'targetKeyspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['targetKeyspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'targetKeyspaceId', the character length must be bigger than or equal to 36.";
            }
            $allowedValues = $this->getTransferModeAllowableValues();
                if (!is_null($this->container['transferMode']) && !in_array($this->container['transferMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'transferMode', must be one of '%s'",
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
    * Gets keyId
    *  **参数解释：** 待转移的密钥ID **约束限制：** 满足正则表达式^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$ **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
    * Sets keyId
    *
    * @param string $keyId **参数解释：** 待转移的密钥ID **约束限制：** 满足正则表达式^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$ **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;
        return $this;
    }

    /**
    * Gets targetKeyspaceId
    *  **参数解释：** 目标密钥空间ID **约束限制：** 满足正则表达式^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$ **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getTargetKeyspaceId()
    {
        return $this->container['targetKeyspaceId'];
    }

    /**
    * Sets targetKeyspaceId
    *
    * @param string $targetKeyspaceId **参数解释：** 目标密钥空间ID **约束限制：** 满足正则表达式^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$ **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTargetKeyspaceId($targetKeyspaceId)
    {
        $this->container['targetKeyspaceId'] = $targetKeyspaceId;
        return $this;
    }

    /**
    * Gets transferMode
    *  **参数解释：** 转移模式 **约束限制：** ASSIGN模式仅支持对称密钥，且密钥必须未属于任何密钥空间，目标密钥空间类型需与密钥所属keystore类型匹配； **取值范围：** - ASSIGN：将密钥分配给目标密钥空间 **默认取值：** ASSIGN
    *
    * @return string|null
    */
    public function getTransferMode()
    {
        return $this->container['transferMode'];
    }

    /**
    * Sets transferMode
    *
    * @param string|null $transferMode **参数解释：** 转移模式 **约束限制：** ASSIGN模式仅支持对称密钥，且密钥必须未属于任何密钥空间，目标密钥空间类型需与密钥所属keystore类型匹配； **取值范围：** - ASSIGN：将密钥分配给目标密钥空间 **默认取值：** ASSIGN
    *
    * @return $this
    */
    public function setTransferMode($transferMode)
    {
        $this->container['transferMode'] = $transferMode;
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

