<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeDetectRiskResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeDetectRiskResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imagesNum  有风险镜像数量
    * baselineRiskNum  基线检查风险项总和
    * vulNum  漏洞数量
    * eventNum  告警数量
    * protectNodeNum  集群开启防护节点数量
    * nodeTotalNum  集群节点总数
    * clusterId  集群id
    * chargingMode  付费模式包括： - on_demand：按需 - free：免费
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imagesNum' => 'int',
            'baselineRiskNum' => 'int',
            'vulNum' => 'int',
            'eventNum' => 'int',
            'protectNodeNum' => 'int',
            'nodeTotalNum' => 'int',
            'clusterId' => 'string',
            'chargingMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imagesNum  有风险镜像数量
    * baselineRiskNum  基线检查风险项总和
    * vulNum  漏洞数量
    * eventNum  告警数量
    * protectNodeNum  集群开启防护节点数量
    * nodeTotalNum  集群节点总数
    * clusterId  集群id
    * chargingMode  付费模式包括： - on_demand：按需 - free：免费
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imagesNum' => null,
        'baselineRiskNum' => null,
        'vulNum' => null,
        'eventNum' => null,
        'protectNodeNum' => null,
        'nodeTotalNum' => null,
        'clusterId' => null,
        'chargingMode' => null
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
    * imagesNum  有风险镜像数量
    * baselineRiskNum  基线检查风险项总和
    * vulNum  漏洞数量
    * eventNum  告警数量
    * protectNodeNum  集群开启防护节点数量
    * nodeTotalNum  集群节点总数
    * clusterId  集群id
    * chargingMode  付费模式包括： - on_demand：按需 - free：免费
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imagesNum' => 'images_num',
            'baselineRiskNum' => 'baseline_risk_num',
            'vulNum' => 'vul_num',
            'eventNum' => 'event_num',
            'protectNodeNum' => 'protect_node_num',
            'nodeTotalNum' => 'node_total_num',
            'clusterId' => 'cluster_id',
            'chargingMode' => 'charging_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imagesNum  有风险镜像数量
    * baselineRiskNum  基线检查风险项总和
    * vulNum  漏洞数量
    * eventNum  告警数量
    * protectNodeNum  集群开启防护节点数量
    * nodeTotalNum  集群节点总数
    * clusterId  集群id
    * chargingMode  付费模式包括： - on_demand：按需 - free：免费
    *
    * @var string[]
    */
    protected static $setters = [
            'imagesNum' => 'setImagesNum',
            'baselineRiskNum' => 'setBaselineRiskNum',
            'vulNum' => 'setVulNum',
            'eventNum' => 'setEventNum',
            'protectNodeNum' => 'setProtectNodeNum',
            'nodeTotalNum' => 'setNodeTotalNum',
            'clusterId' => 'setClusterId',
            'chargingMode' => 'setChargingMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imagesNum  有风险镜像数量
    * baselineRiskNum  基线检查风险项总和
    * vulNum  漏洞数量
    * eventNum  告警数量
    * protectNodeNum  集群开启防护节点数量
    * nodeTotalNum  集群节点总数
    * clusterId  集群id
    * chargingMode  付费模式包括： - on_demand：按需 - free：免费
    *
    * @var string[]
    */
    protected static $getters = [
            'imagesNum' => 'getImagesNum',
            'baselineRiskNum' => 'getBaselineRiskNum',
            'vulNum' => 'getVulNum',
            'eventNum' => 'getEventNum',
            'protectNodeNum' => 'getProtectNodeNum',
            'nodeTotalNum' => 'getNodeTotalNum',
            'clusterId' => 'getClusterId',
            'chargingMode' => 'getChargingMode'
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
        $this->container['imagesNum'] = isset($data['imagesNum']) ? $data['imagesNum'] : null;
        $this->container['baselineRiskNum'] = isset($data['baselineRiskNum']) ? $data['baselineRiskNum'] : null;
        $this->container['vulNum'] = isset($data['vulNum']) ? $data['vulNum'] : null;
        $this->container['eventNum'] = isset($data['eventNum']) ? $data['eventNum'] : null;
        $this->container['protectNodeNum'] = isset($data['protectNodeNum']) ? $data['protectNodeNum'] : null;
        $this->container['nodeTotalNum'] = isset($data['nodeTotalNum']) ? $data['nodeTotalNum'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['imagesNum']) && ($this->container['imagesNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'imagesNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['imagesNum']) && ($this->container['imagesNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'imagesNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['baselineRiskNum']) && ($this->container['baselineRiskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'baselineRiskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['baselineRiskNum']) && ($this->container['baselineRiskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'baselineRiskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulNum']) && ($this->container['vulNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'vulNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['vulNum']) && ($this->container['vulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['eventNum']) && ($this->container['eventNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'eventNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['eventNum']) && ($this->container['eventNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'eventNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectNodeNum']) && ($this->container['protectNodeNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'protectNodeNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['protectNodeNum']) && ($this->container['protectNodeNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectNodeNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nodeTotalNum']) && ($this->container['nodeTotalNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'nodeTotalNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['nodeTotalNum']) && ($this->container['nodeTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'nodeTotalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterId']) && !preg_match("/^.*$/", $this->container['clusterId'])) {
                $invalidProperties[] = "invalid value for 'clusterId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['chargingMode']) && !preg_match("/^.*$/", $this->container['chargingMode'])) {
                $invalidProperties[] = "invalid value for 'chargingMode', must be conform to the pattern /^.*$/.";
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
    * Gets imagesNum
    *  有风险镜像数量
    *
    * @return int|null
    */
    public function getImagesNum()
    {
        return $this->container['imagesNum'];
    }

    /**
    * Sets imagesNum
    *
    * @param int|null $imagesNum 有风险镜像数量
    *
    * @return $this
    */
    public function setImagesNum($imagesNum)
    {
        $this->container['imagesNum'] = $imagesNum;
        return $this;
    }

    /**
    * Gets baselineRiskNum
    *  基线检查风险项总和
    *
    * @return int|null
    */
    public function getBaselineRiskNum()
    {
        return $this->container['baselineRiskNum'];
    }

    /**
    * Sets baselineRiskNum
    *
    * @param int|null $baselineRiskNum 基线检查风险项总和
    *
    * @return $this
    */
    public function setBaselineRiskNum($baselineRiskNum)
    {
        $this->container['baselineRiskNum'] = $baselineRiskNum;
        return $this;
    }

    /**
    * Gets vulNum
    *  漏洞数量
    *
    * @return int|null
    */
    public function getVulNum()
    {
        return $this->container['vulNum'];
    }

    /**
    * Sets vulNum
    *
    * @param int|null $vulNum 漏洞数量
    *
    * @return $this
    */
    public function setVulNum($vulNum)
    {
        $this->container['vulNum'] = $vulNum;
        return $this;
    }

    /**
    * Gets eventNum
    *  告警数量
    *
    * @return int|null
    */
    public function getEventNum()
    {
        return $this->container['eventNum'];
    }

    /**
    * Sets eventNum
    *
    * @param int|null $eventNum 告警数量
    *
    * @return $this
    */
    public function setEventNum($eventNum)
    {
        $this->container['eventNum'] = $eventNum;
        return $this;
    }

    /**
    * Gets protectNodeNum
    *  集群开启防护节点数量
    *
    * @return int|null
    */
    public function getProtectNodeNum()
    {
        return $this->container['protectNodeNum'];
    }

    /**
    * Sets protectNodeNum
    *
    * @param int|null $protectNodeNum 集群开启防护节点数量
    *
    * @return $this
    */
    public function setProtectNodeNum($protectNodeNum)
    {
        $this->container['protectNodeNum'] = $protectNodeNum;
        return $this;
    }

    /**
    * Gets nodeTotalNum
    *  集群节点总数
    *
    * @return int|null
    */
    public function getNodeTotalNum()
    {
        return $this->container['nodeTotalNum'];
    }

    /**
    * Sets nodeTotalNum
    *
    * @param int|null $nodeTotalNum 集群节点总数
    *
    * @return $this
    */
    public function setNodeTotalNum($nodeTotalNum)
    {
        $this->container['nodeTotalNum'] = $nodeTotalNum;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群id
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets chargingMode
    *  付费模式包括： - on_demand：按需 - free：免费
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode 付费模式包括： - on_demand：按需 - free：免费
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
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

