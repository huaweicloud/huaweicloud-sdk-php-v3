<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InvokeWdrReportResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InvokeWdrReportResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceWdr  实例WDR报表下载地址
    * instanceWdrName  WDR报表名称
    * nodeWdrList  节点WDR报表列表
    * wdrStatus  WDR报表状态。取值范围：0（无报表）、1（生成中）、2（生成成功）、3（生成失败）
    * startSnapshotId  WDR快照开始ID
    * endSnapshotId  WDR快照结束ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceWdr' => 'string',
            'instanceWdrName' => 'string',
            'nodeWdrList' => '\HuaweiCloud\SDK\Das\V3\Model\NodeWdrDto[]',
            'wdrStatus' => 'int',
            'startSnapshotId' => 'int',
            'endSnapshotId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceWdr  实例WDR报表下载地址
    * instanceWdrName  WDR报表名称
    * nodeWdrList  节点WDR报表列表
    * wdrStatus  WDR报表状态。取值范围：0（无报表）、1（生成中）、2（生成成功）、3（生成失败）
    * startSnapshotId  WDR快照开始ID
    * endSnapshotId  WDR快照结束ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceWdr' => null,
        'instanceWdrName' => null,
        'nodeWdrList' => null,
        'wdrStatus' => 'int32',
        'startSnapshotId' => 'int64',
        'endSnapshotId' => 'int64'
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
    * instanceWdr  实例WDR报表下载地址
    * instanceWdrName  WDR报表名称
    * nodeWdrList  节点WDR报表列表
    * wdrStatus  WDR报表状态。取值范围：0（无报表）、1（生成中）、2（生成成功）、3（生成失败）
    * startSnapshotId  WDR快照开始ID
    * endSnapshotId  WDR快照结束ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceWdr' => 'instance_wdr',
            'instanceWdrName' => 'instance_wdr_name',
            'nodeWdrList' => 'node_wdr_list',
            'wdrStatus' => 'wdr_status',
            'startSnapshotId' => 'start_snapshot_id',
            'endSnapshotId' => 'end_snapshot_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceWdr  实例WDR报表下载地址
    * instanceWdrName  WDR报表名称
    * nodeWdrList  节点WDR报表列表
    * wdrStatus  WDR报表状态。取值范围：0（无报表）、1（生成中）、2（生成成功）、3（生成失败）
    * startSnapshotId  WDR快照开始ID
    * endSnapshotId  WDR快照结束ID
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceWdr' => 'setInstanceWdr',
            'instanceWdrName' => 'setInstanceWdrName',
            'nodeWdrList' => 'setNodeWdrList',
            'wdrStatus' => 'setWdrStatus',
            'startSnapshotId' => 'setStartSnapshotId',
            'endSnapshotId' => 'setEndSnapshotId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceWdr  实例WDR报表下载地址
    * instanceWdrName  WDR报表名称
    * nodeWdrList  节点WDR报表列表
    * wdrStatus  WDR报表状态。取值范围：0（无报表）、1（生成中）、2（生成成功）、3（生成失败）
    * startSnapshotId  WDR快照开始ID
    * endSnapshotId  WDR快照结束ID
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceWdr' => 'getInstanceWdr',
            'instanceWdrName' => 'getInstanceWdrName',
            'nodeWdrList' => 'getNodeWdrList',
            'wdrStatus' => 'getWdrStatus',
            'startSnapshotId' => 'getStartSnapshotId',
            'endSnapshotId' => 'getEndSnapshotId'
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
        $this->container['instanceWdr'] = isset($data['instanceWdr']) ? $data['instanceWdr'] : null;
        $this->container['instanceWdrName'] = isset($data['instanceWdrName']) ? $data['instanceWdrName'] : null;
        $this->container['nodeWdrList'] = isset($data['nodeWdrList']) ? $data['nodeWdrList'] : null;
        $this->container['wdrStatus'] = isset($data['wdrStatus']) ? $data['wdrStatus'] : null;
        $this->container['startSnapshotId'] = isset($data['startSnapshotId']) ? $data['startSnapshotId'] : null;
        $this->container['endSnapshotId'] = isset($data['endSnapshotId']) ? $data['endSnapshotId'] : null;
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
    * Gets instanceWdr
    *  实例WDR报表下载地址
    *
    * @return string|null
    */
    public function getInstanceWdr()
    {
        return $this->container['instanceWdr'];
    }

    /**
    * Sets instanceWdr
    *
    * @param string|null $instanceWdr 实例WDR报表下载地址
    *
    * @return $this
    */
    public function setInstanceWdr($instanceWdr)
    {
        $this->container['instanceWdr'] = $instanceWdr;
        return $this;
    }

    /**
    * Gets instanceWdrName
    *  WDR报表名称
    *
    * @return string|null
    */
    public function getInstanceWdrName()
    {
        return $this->container['instanceWdrName'];
    }

    /**
    * Sets instanceWdrName
    *
    * @param string|null $instanceWdrName WDR报表名称
    *
    * @return $this
    */
    public function setInstanceWdrName($instanceWdrName)
    {
        $this->container['instanceWdrName'] = $instanceWdrName;
        return $this;
    }

    /**
    * Gets nodeWdrList
    *  节点WDR报表列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\NodeWdrDto[]|null
    */
    public function getNodeWdrList()
    {
        return $this->container['nodeWdrList'];
    }

    /**
    * Sets nodeWdrList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\NodeWdrDto[]|null $nodeWdrList 节点WDR报表列表
    *
    * @return $this
    */
    public function setNodeWdrList($nodeWdrList)
    {
        $this->container['nodeWdrList'] = $nodeWdrList;
        return $this;
    }

    /**
    * Gets wdrStatus
    *  WDR报表状态。取值范围：0（无报表）、1（生成中）、2（生成成功）、3（生成失败）
    *
    * @return int|null
    */
    public function getWdrStatus()
    {
        return $this->container['wdrStatus'];
    }

    /**
    * Sets wdrStatus
    *
    * @param int|null $wdrStatus WDR报表状态。取值范围：0（无报表）、1（生成中）、2（生成成功）、3（生成失败）
    *
    * @return $this
    */
    public function setWdrStatus($wdrStatus)
    {
        $this->container['wdrStatus'] = $wdrStatus;
        return $this;
    }

    /**
    * Gets startSnapshotId
    *  WDR快照开始ID
    *
    * @return int|null
    */
    public function getStartSnapshotId()
    {
        return $this->container['startSnapshotId'];
    }

    /**
    * Sets startSnapshotId
    *
    * @param int|null $startSnapshotId WDR快照开始ID
    *
    * @return $this
    */
    public function setStartSnapshotId($startSnapshotId)
    {
        $this->container['startSnapshotId'] = $startSnapshotId;
        return $this;
    }

    /**
    * Gets endSnapshotId
    *  WDR快照结束ID
    *
    * @return int|null
    */
    public function getEndSnapshotId()
    {
        return $this->container['endSnapshotId'];
    }

    /**
    * Sets endSnapshotId
    *
    * @param int|null $endSnapshotId WDR快照结束ID
    *
    * @return $this
    */
    public function setEndSnapshotId($endSnapshotId)
    {
        $this->container['endSnapshotId'] = $endSnapshotId;
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

