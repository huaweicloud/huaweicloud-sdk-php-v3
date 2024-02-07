<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GlobalConnectionBandwidthInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GlobalConnectionBandwidthInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * gcbId  骨干带宽id
    * size  骨干带宽大小
    * gcbType  骨干带宽类型（城域、区域和大区）
    * adminState  骨干带宽状态，取值：NORMAL 正常、FREEZED 冻结
    * slaLevel  网络服务等级。Pt - 铂金，Au - 金牌，Ag - 银牌，Cu - 铜牌
    * dscp  线路质量金银铜对应的DSCP值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'gcbId' => 'string',
            'size' => 'int',
            'gcbType' => 'string',
            'adminState' => 'string',
            'slaLevel' => 'string',
            'dscp' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * gcbId  骨干带宽id
    * size  骨干带宽大小
    * gcbType  骨干带宽类型（城域、区域和大区）
    * adminState  骨干带宽状态，取值：NORMAL 正常、FREEZED 冻结
    * slaLevel  网络服务等级。Pt - 铂金，Au - 金牌，Ag - 银牌，Cu - 铜牌
    * dscp  线路质量金银铜对应的DSCP值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'gcbId' => null,
        'size' => 'int32',
        'gcbType' => null,
        'adminState' => null,
        'slaLevel' => null,
        'dscp' => 'int32'
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
    * gcbId  骨干带宽id
    * size  骨干带宽大小
    * gcbType  骨干带宽类型（城域、区域和大区）
    * adminState  骨干带宽状态，取值：NORMAL 正常、FREEZED 冻结
    * slaLevel  网络服务等级。Pt - 铂金，Au - 金牌，Ag - 银牌，Cu - 铜牌
    * dscp  线路质量金银铜对应的DSCP值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'gcbId' => 'gcb_id',
            'size' => 'size',
            'gcbType' => 'gcb_type',
            'adminState' => 'admin_state',
            'slaLevel' => 'sla_level',
            'dscp' => 'dscp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * gcbId  骨干带宽id
    * size  骨干带宽大小
    * gcbType  骨干带宽类型（城域、区域和大区）
    * adminState  骨干带宽状态，取值：NORMAL 正常、FREEZED 冻结
    * slaLevel  网络服务等级。Pt - 铂金，Au - 金牌，Ag - 银牌，Cu - 铜牌
    * dscp  线路质量金银铜对应的DSCP值
    *
    * @var string[]
    */
    protected static $setters = [
            'gcbId' => 'setGcbId',
            'size' => 'setSize',
            'gcbType' => 'setGcbType',
            'adminState' => 'setAdminState',
            'slaLevel' => 'setSlaLevel',
            'dscp' => 'setDscp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * gcbId  骨干带宽id
    * size  骨干带宽大小
    * gcbType  骨干带宽类型（城域、区域和大区）
    * adminState  骨干带宽状态，取值：NORMAL 正常、FREEZED 冻结
    * slaLevel  网络服务等级。Pt - 铂金，Au - 金牌，Ag - 银牌，Cu - 铜牌
    * dscp  线路质量金银铜对应的DSCP值
    *
    * @var string[]
    */
    protected static $getters = [
            'gcbId' => 'getGcbId',
            'size' => 'getSize',
            'gcbType' => 'getGcbType',
            'adminState' => 'getAdminState',
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
        $this->container['gcbId'] = isset($data['gcbId']) ? $data['gcbId'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['gcbType'] = isset($data['gcbType']) ? $data['gcbType'] : null;
        $this->container['adminState'] = isset($data['adminState']) ? $data['adminState'] : null;
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
    * Gets gcbId
    *  骨干带宽id
    *
    * @return string|null
    */
    public function getGcbId()
    {
        return $this->container['gcbId'];
    }

    /**
    * Sets gcbId
    *
    * @param string|null $gcbId 骨干带宽id
    *
    * @return $this
    */
    public function setGcbId($gcbId)
    {
        $this->container['gcbId'] = $gcbId;
        return $this;
    }

    /**
    * Gets size
    *  骨干带宽大小
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
    * @param int|null $size 骨干带宽大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets gcbType
    *  骨干带宽类型（城域、区域和大区）
    *
    * @return string|null
    */
    public function getGcbType()
    {
        return $this->container['gcbType'];
    }

    /**
    * Sets gcbType
    *
    * @param string|null $gcbType 骨干带宽类型（城域、区域和大区）
    *
    * @return $this
    */
    public function setGcbType($gcbType)
    {
        $this->container['gcbType'] = $gcbType;
        return $this;
    }

    /**
    * Gets adminState
    *  骨干带宽状态，取值：NORMAL 正常、FREEZED 冻结
    *
    * @return string|null
    */
    public function getAdminState()
    {
        return $this->container['adminState'];
    }

    /**
    * Sets adminState
    *
    * @param string|null $adminState 骨干带宽状态，取值：NORMAL 正常、FREEZED 冻结
    *
    * @return $this
    */
    public function setAdminState($adminState)
    {
        $this->container['adminState'] = $adminState;
        return $this;
    }

    /**
    * Gets slaLevel
    *  网络服务等级。Pt - 铂金，Au - 金牌，Ag - 银牌，Cu - 铜牌
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
    * @param string|null $slaLevel 网络服务等级。Pt - 铂金，Au - 金牌，Ag - 银牌，Cu - 铜牌
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

