<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackboneBandwidthResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackboneBandwidthResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  骨干带宽的uuid
    * adminStatus  骨干带宽的状态
    * size  骨干带宽的大小
    * shortId  骨干带宽的short_id
    * slaLevel  描述网络等级，从高到低分为铂金、金、银、铜
    * dscp  线路质量金银铜对应的DSCP值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'adminStatus' => 'string',
            'size' => 'int',
            'shortId' => 'string',
            'slaLevel' => 'string',
            'dscp' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  骨干带宽的uuid
    * adminStatus  骨干带宽的状态
    * size  骨干带宽的大小
    * shortId  骨干带宽的short_id
    * slaLevel  描述网络等级，从高到低分为铂金、金、银、铜
    * dscp  线路质量金银铜对应的DSCP值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'adminStatus' => null,
        'size' => null,
        'shortId' => null,
        'slaLevel' => null,
        'dscp' => null
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
    * id  骨干带宽的uuid
    * adminStatus  骨干带宽的状态
    * size  骨干带宽的大小
    * shortId  骨干带宽的short_id
    * slaLevel  描述网络等级，从高到低分为铂金、金、银、铜
    * dscp  线路质量金银铜对应的DSCP值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'adminStatus' => 'admin_status',
            'size' => 'size',
            'shortId' => 'short_id',
            'slaLevel' => 'sla_level',
            'dscp' => 'dscp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  骨干带宽的uuid
    * adminStatus  骨干带宽的状态
    * size  骨干带宽的大小
    * shortId  骨干带宽的short_id
    * slaLevel  描述网络等级，从高到低分为铂金、金、银、铜
    * dscp  线路质量金银铜对应的DSCP值
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'adminStatus' => 'setAdminStatus',
            'size' => 'setSize',
            'shortId' => 'setShortId',
            'slaLevel' => 'setSlaLevel',
            'dscp' => 'setDscp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  骨干带宽的uuid
    * adminStatus  骨干带宽的状态
    * size  骨干带宽的大小
    * shortId  骨干带宽的short_id
    * slaLevel  描述网络等级，从高到低分为铂金、金、银、铜
    * dscp  线路质量金银铜对应的DSCP值
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'adminStatus' => 'getAdminStatus',
            'size' => 'getSize',
            'shortId' => 'getShortId',
            'slaLevel' => 'getSlaLevel',
            'dscp' => 'getDscp'
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
    const SLA_LEVEL_PT = 'Pt';
    const SLA_LEVEL_AU = 'Au';
    const SLA_LEVEL_AG = 'Ag';
    const SLA_LEVEL_CU = 'Cu';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSlaLevelAllowableValues()
    {
        return [
            self::SLA_LEVEL_PT,
            self::SLA_LEVEL_AU,
            self::SLA_LEVEL_AG,
            self::SLA_LEVEL_CU,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['adminStatus'] = isset($data['adminStatus']) ? $data['adminStatus'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['shortId'] = isset($data['shortId']) ? $data['shortId'] : null;
        $this->container['slaLevel'] = isset($data['slaLevel']) ? $data['slaLevel'] : null;
        $this->container['dscp'] = isset($data['dscp']) ? $data['dscp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['adminStatus']) && (mb_strlen($this->container['adminStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'adminStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['adminStatus']) && (mb_strlen($this->container['adminStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'adminStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 2000)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['shortId']) && (mb_strlen($this->container['shortId']) > 36)) {
                $invalidProperties[] = "invalid value for 'shortId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['shortId']) && (mb_strlen($this->container['shortId']) < 0)) {
                $invalidProperties[] = "invalid value for 'shortId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getSlaLevelAllowableValues();
                if (!is_null($this->container['slaLevel']) && !in_array($this->container['slaLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'slaLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['dscp']) && ($this->container['dscp'] > 63)) {
                $invalidProperties[] = "invalid value for 'dscp', must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['dscp']) && ($this->container['dscp'] < 0)) {
                $invalidProperties[] = "invalid value for 'dscp', must be bigger than or equal to 0.";
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
    * Gets id
    *  骨干带宽的uuid
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 骨干带宽的uuid
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets adminStatus
    *  骨干带宽的状态
    *
    * @return string|null
    */
    public function getAdminStatus()
    {
        return $this->container['adminStatus'];
    }

    /**
    * Sets adminStatus
    *
    * @param string|null $adminStatus 骨干带宽的状态
    *
    * @return $this
    */
    public function setAdminStatus($adminStatus)
    {
        $this->container['adminStatus'] = $adminStatus;
        return $this;
    }

    /**
    * Gets size
    *  骨干带宽的大小
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 骨干带宽的大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets shortId
    *  骨干带宽的short_id
    *
    * @return string|null
    */
    public function getShortId()
    {
        return $this->container['shortId'];
    }

    /**
    * Sets shortId
    *
    * @param string|null $shortId 骨干带宽的short_id
    *
    * @return $this
    */
    public function setShortId($shortId)
    {
        $this->container['shortId'] = $shortId;
        return $this;
    }

    /**
    * Gets slaLevel
    *  描述网络等级，从高到低分为铂金、金、银、铜
    *
    * @return string|null
    */
    public function getSlaLevel()
    {
        return $this->container['slaLevel'];
    }

    /**
    * Sets slaLevel
    *
    * @param string|null $slaLevel 描述网络等级，从高到低分为铂金、金、银、铜
    *
    * @return $this
    */
    public function setSlaLevel($slaLevel)
    {
        $this->container['slaLevel'] = $slaLevel;
        return $this;
    }

    /**
    * Gets dscp
    *  线路质量金银铜对应的DSCP值
    *
    * @return int|null
    */
    public function getDscp()
    {
        return $this->container['dscp'];
    }

    /**
    * Sets dscp
    *
    * @param int|null $dscp 线路质量金银铜对应的DSCP值
    *
    * @return $this
    */
    public function setDscp($dscp)
    {
        $this->container['dscp'] = $dscp;
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

