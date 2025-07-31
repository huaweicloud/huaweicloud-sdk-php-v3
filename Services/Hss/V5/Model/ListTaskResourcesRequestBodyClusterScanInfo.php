<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTaskResourcesRequestBodyClusterScanInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTaskResourcesRequestBody_cluster_scan_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scanStatus  集群的扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    * clusterName  集群名称
    * clusterId  集群id
    * clusterType  集群类型，包含如下： - cce：CCE集群 - ali：阿里云集群 - tencent：腾讯云集群 - azure：微软云集群 - aws：亚马逊集群 - self_built_hw：华为云自建集群 - self_built_idc：IDC自建集群
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scanStatus' => 'string',
            'clusterName' => 'string',
            'clusterId' => 'string',
            'clusterType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scanStatus  集群的扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    * clusterName  集群名称
    * clusterId  集群id
    * clusterType  集群类型，包含如下： - cce：CCE集群 - ali：阿里云集群 - tencent：腾讯云集群 - azure：微软云集群 - aws：亚马逊集群 - self_built_hw：华为云自建集群 - self_built_idc：IDC自建集群
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scanStatus' => null,
        'clusterName' => null,
        'clusterId' => null,
        'clusterType' => null
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
    * scanStatus  集群的扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    * clusterName  集群名称
    * clusterId  集群id
    * clusterType  集群类型，包含如下： - cce：CCE集群 - ali：阿里云集群 - tencent：腾讯云集群 - azure：微软云集群 - aws：亚马逊集群 - self_built_hw：华为云自建集群 - self_built_idc：IDC自建集群
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scanStatus' => 'scan_status',
            'clusterName' => 'cluster_name',
            'clusterId' => 'cluster_id',
            'clusterType' => 'cluster_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scanStatus  集群的扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    * clusterName  集群名称
    * clusterId  集群id
    * clusterType  集群类型，包含如下： - cce：CCE集群 - ali：阿里云集群 - tencent：腾讯云集群 - azure：微软云集群 - aws：亚马逊集群 - self_built_hw：华为云自建集群 - self_built_idc：IDC自建集群
    *
    * @var string[]
    */
    protected static $setters = [
            'scanStatus' => 'setScanStatus',
            'clusterName' => 'setClusterName',
            'clusterId' => 'setClusterId',
            'clusterType' => 'setClusterType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scanStatus  集群的扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    * clusterName  集群名称
    * clusterId  集群id
    * clusterType  集群类型，包含如下： - cce：CCE集群 - ali：阿里云集群 - tencent：腾讯云集群 - azure：微软云集群 - aws：亚马逊集群 - self_built_hw：华为云自建集群 - self_built_idc：IDC自建集群
    *
    * @var string[]
    */
    protected static $getters = [
            'scanStatus' => 'getScanStatus',
            'clusterName' => 'getClusterName',
            'clusterId' => 'getClusterId',
            'clusterType' => 'getClusterType'
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
        $this->container['scanStatus'] = isset($data['scanStatus']) ? $data['scanStatus'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterType']) && (mb_strlen($this->container['clusterType']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterType']) && (mb_strlen($this->container['clusterType']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterType']) && !preg_match("/^cce|ali|tencent|azure|aws|self_built_hw|self_built_idc$/", $this->container['clusterType'])) {
                $invalidProperties[] = "invalid value for 'clusterType', must be conform to the pattern /^cce|ali|tencent|azure|aws|self_built_hw|self_built_idc$/.";
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
    * Gets scanStatus
    *  集群的扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    *
    * @return string|null
    */
    public function getScanStatus()
    {
        return $this->container['scanStatus'];
    }

    /**
    * Sets scanStatus
    *
    * @param string|null $scanStatus 集群的扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    *
    * @return $this
    */
    public function setScanStatus($scanStatus)
    {
        $this->container['scanStatus'] = $scanStatus;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
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
    * Gets clusterType
    *  集群类型，包含如下： - cce：CCE集群 - ali：阿里云集群 - tencent：腾讯云集群 - azure：微软云集群 - aws：亚马逊集群 - self_built_hw：华为云自建集群 - self_built_idc：IDC自建集群
    *
    * @return string|null
    */
    public function getClusterType()
    {
        return $this->container['clusterType'];
    }

    /**
    * Sets clusterType
    *
    * @param string|null $clusterType 集群类型，包含如下： - cce：CCE集群 - ali：阿里云集群 - tencent：腾讯云集群 - azure：微软云集群 - aws：亚马逊集群 - self_built_hw：华为云自建集群 - self_built_idc：IDC自建集群
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
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

