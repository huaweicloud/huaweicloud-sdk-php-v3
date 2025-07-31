<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowClusterScanStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowClusterScanStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * riskClusterNum  有风险集群数量
    * appVulClusterNum  存在应用漏洞的集群数量
    * unscanClusterNum  未扫描集群数量
    * allClusterNum  集群总数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'riskClusterNum' => 'int',
            'appVulClusterNum' => 'int',
            'unscanClusterNum' => 'int',
            'allClusterNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * riskClusterNum  有风险集群数量
    * appVulClusterNum  存在应用漏洞的集群数量
    * unscanClusterNum  未扫描集群数量
    * allClusterNum  集群总数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'riskClusterNum' => 'int32',
        'appVulClusterNum' => 'int32',
        'unscanClusterNum' => 'int32',
        'allClusterNum' => 'int32'
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
    * riskClusterNum  有风险集群数量
    * appVulClusterNum  存在应用漏洞的集群数量
    * unscanClusterNum  未扫描集群数量
    * allClusterNum  集群总数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'riskClusterNum' => 'risk_cluster_num',
            'appVulClusterNum' => 'app_vul_cluster_num',
            'unscanClusterNum' => 'unscan_cluster_num',
            'allClusterNum' => 'all_cluster_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * riskClusterNum  有风险集群数量
    * appVulClusterNum  存在应用漏洞的集群数量
    * unscanClusterNum  未扫描集群数量
    * allClusterNum  集群总数量
    *
    * @var string[]
    */
    protected static $setters = [
            'riskClusterNum' => 'setRiskClusterNum',
            'appVulClusterNum' => 'setAppVulClusterNum',
            'unscanClusterNum' => 'setUnscanClusterNum',
            'allClusterNum' => 'setAllClusterNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * riskClusterNum  有风险集群数量
    * appVulClusterNum  存在应用漏洞的集群数量
    * unscanClusterNum  未扫描集群数量
    * allClusterNum  集群总数量
    *
    * @var string[]
    */
    protected static $getters = [
            'riskClusterNum' => 'getRiskClusterNum',
            'appVulClusterNum' => 'getAppVulClusterNum',
            'unscanClusterNum' => 'getUnscanClusterNum',
            'allClusterNum' => 'getAllClusterNum'
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
        $this->container['riskClusterNum'] = isset($data['riskClusterNum']) ? $data['riskClusterNum'] : null;
        $this->container['appVulClusterNum'] = isset($data['appVulClusterNum']) ? $data['appVulClusterNum'] : null;
        $this->container['unscanClusterNum'] = isset($data['unscanClusterNum']) ? $data['unscanClusterNum'] : null;
        $this->container['allClusterNum'] = isset($data['allClusterNum']) ? $data['allClusterNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['riskClusterNum']) && ($this->container['riskClusterNum'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'riskClusterNum', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['riskClusterNum']) && ($this->container['riskClusterNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'riskClusterNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appVulClusterNum']) && ($this->container['appVulClusterNum'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'appVulClusterNum', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['appVulClusterNum']) && ($this->container['appVulClusterNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'appVulClusterNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unscanClusterNum']) && ($this->container['unscanClusterNum'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'unscanClusterNum', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['unscanClusterNum']) && ($this->container['unscanClusterNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unscanClusterNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['allClusterNum']) && ($this->container['allClusterNum'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'allClusterNum', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['allClusterNum']) && ($this->container['allClusterNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'allClusterNum', must be bigger than or equal to 0.";
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
    * Gets riskClusterNum
    *  有风险集群数量
    *
    * @return int|null
    */
    public function getRiskClusterNum()
    {
        return $this->container['riskClusterNum'];
    }

    /**
    * Sets riskClusterNum
    *
    * @param int|null $riskClusterNum 有风险集群数量
    *
    * @return $this
    */
    public function setRiskClusterNum($riskClusterNum)
    {
        $this->container['riskClusterNum'] = $riskClusterNum;
        return $this;
    }

    /**
    * Gets appVulClusterNum
    *  存在应用漏洞的集群数量
    *
    * @return int|null
    */
    public function getAppVulClusterNum()
    {
        return $this->container['appVulClusterNum'];
    }

    /**
    * Sets appVulClusterNum
    *
    * @param int|null $appVulClusterNum 存在应用漏洞的集群数量
    *
    * @return $this
    */
    public function setAppVulClusterNum($appVulClusterNum)
    {
        $this->container['appVulClusterNum'] = $appVulClusterNum;
        return $this;
    }

    /**
    * Gets unscanClusterNum
    *  未扫描集群数量
    *
    * @return int|null
    */
    public function getUnscanClusterNum()
    {
        return $this->container['unscanClusterNum'];
    }

    /**
    * Sets unscanClusterNum
    *
    * @param int|null $unscanClusterNum 未扫描集群数量
    *
    * @return $this
    */
    public function setUnscanClusterNum($unscanClusterNum)
    {
        $this->container['unscanClusterNum'] = $unscanClusterNum;
        return $this;
    }

    /**
    * Gets allClusterNum
    *  集群总数量
    *
    * @return int|null
    */
    public function getAllClusterNum()
    {
        return $this->container['allClusterNum'];
    }

    /**
    * Sets allClusterNum
    *
    * @param int|null $allClusterNum 集群总数量
    *
    * @return $this
    */
    public function setAllClusterNum($allClusterNum)
    {
        $this->container['allClusterNum'] = $allClusterNum;
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

