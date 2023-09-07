<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMonitorDataResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMonitorDataResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bandwidth  EIP带宽，单位：MB/S
    * isSrcNormal  源库连接状态是否正常。
    * isDstNormal  目标库连接状态是否正常。
    * srcOffset  源库offSet位点。
    * nodeOffset  迁移实例offSet位点。
    * dstOffset  目标库offSet位点。
    * srcDelay  源库时延。
    * dstDelay  目标库时延。
    * srcRps  源库RPS。
    * srcIo  源库IO。
    * dstRps  目标库RPS。
    * dstIo  目标库IO。
    * transData  迁移数据量。单位：MB
    * transLines  迁移数据行数。
    * usedVolumes  磁盘使用量。单位：GB
    * usedMemory  内存使用量。单位：MB
    * usedCpuPercent  CPU使用百分比。
    * nodeVolumeSize  node磁盘总大小。单位：GB
    * nodeMemorySize  node内存总大小。单位：MB
    * updateTime  更新时间。
    * applyRate  同步速度。单位：byte/s
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bandwidth' => 'string',
            'isSrcNormal' => 'bool',
            'isDstNormal' => 'bool',
            'srcOffset' => 'string',
            'nodeOffset' => 'string',
            'dstOffset' => 'string',
            'srcDelay' => 'int',
            'dstDelay' => 'int',
            'srcRps' => 'string',
            'srcIo' => 'string',
            'dstRps' => 'string',
            'dstIo' => 'string',
            'transData' => 'string',
            'transLines' => 'string',
            'usedVolumes' => 'string',
            'usedMemory' => 'string',
            'usedCpuPercent' => 'string',
            'nodeVolumeSize' => 'int',
            'nodeMemorySize' => 'int',
            'updateTime' => 'string',
            'applyRate' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bandwidth  EIP带宽，单位：MB/S
    * isSrcNormal  源库连接状态是否正常。
    * isDstNormal  目标库连接状态是否正常。
    * srcOffset  源库offSet位点。
    * nodeOffset  迁移实例offSet位点。
    * dstOffset  目标库offSet位点。
    * srcDelay  源库时延。
    * dstDelay  目标库时延。
    * srcRps  源库RPS。
    * srcIo  源库IO。
    * dstRps  目标库RPS。
    * dstIo  目标库IO。
    * transData  迁移数据量。单位：MB
    * transLines  迁移数据行数。
    * usedVolumes  磁盘使用量。单位：GB
    * usedMemory  内存使用量。单位：MB
    * usedCpuPercent  CPU使用百分比。
    * nodeVolumeSize  node磁盘总大小。单位：GB
    * nodeMemorySize  node内存总大小。单位：MB
    * updateTime  更新时间。
    * applyRate  同步速度。单位：byte/s
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bandwidth' => null,
        'isSrcNormal' => null,
        'isDstNormal' => null,
        'srcOffset' => null,
        'nodeOffset' => null,
        'dstOffset' => null,
        'srcDelay' => 'int32',
        'dstDelay' => 'int32',
        'srcRps' => null,
        'srcIo' => null,
        'dstRps' => null,
        'dstIo' => null,
        'transData' => null,
        'transLines' => null,
        'usedVolumes' => null,
        'usedMemory' => null,
        'usedCpuPercent' => null,
        'nodeVolumeSize' => 'int32',
        'nodeMemorySize' => 'int32',
        'updateTime' => null,
        'applyRate' => 'int32'
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
    * bandwidth  EIP带宽，单位：MB/S
    * isSrcNormal  源库连接状态是否正常。
    * isDstNormal  目标库连接状态是否正常。
    * srcOffset  源库offSet位点。
    * nodeOffset  迁移实例offSet位点。
    * dstOffset  目标库offSet位点。
    * srcDelay  源库时延。
    * dstDelay  目标库时延。
    * srcRps  源库RPS。
    * srcIo  源库IO。
    * dstRps  目标库RPS。
    * dstIo  目标库IO。
    * transData  迁移数据量。单位：MB
    * transLines  迁移数据行数。
    * usedVolumes  磁盘使用量。单位：GB
    * usedMemory  内存使用量。单位：MB
    * usedCpuPercent  CPU使用百分比。
    * nodeVolumeSize  node磁盘总大小。单位：GB
    * nodeMemorySize  node内存总大小。单位：MB
    * updateTime  更新时间。
    * applyRate  同步速度。单位：byte/s
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bandwidth' => 'bandwidth',
            'isSrcNormal' => 'is_src_normal',
            'isDstNormal' => 'is_dst_normal',
            'srcOffset' => 'src_offset',
            'nodeOffset' => 'node_offset',
            'dstOffset' => 'dst_offset',
            'srcDelay' => 'src_delay',
            'dstDelay' => 'dst_delay',
            'srcRps' => 'src_rps',
            'srcIo' => 'src_io',
            'dstRps' => 'dst_rps',
            'dstIo' => 'dst_io',
            'transData' => 'trans_data',
            'transLines' => 'trans_lines',
            'usedVolumes' => 'used_volumes',
            'usedMemory' => 'used_memory',
            'usedCpuPercent' => 'used_cpu_percent',
            'nodeVolumeSize' => 'node_volume_size',
            'nodeMemorySize' => 'node_memory_size',
            'updateTime' => 'update_time',
            'applyRate' => 'apply_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bandwidth  EIP带宽，单位：MB/S
    * isSrcNormal  源库连接状态是否正常。
    * isDstNormal  目标库连接状态是否正常。
    * srcOffset  源库offSet位点。
    * nodeOffset  迁移实例offSet位点。
    * dstOffset  目标库offSet位点。
    * srcDelay  源库时延。
    * dstDelay  目标库时延。
    * srcRps  源库RPS。
    * srcIo  源库IO。
    * dstRps  目标库RPS。
    * dstIo  目标库IO。
    * transData  迁移数据量。单位：MB
    * transLines  迁移数据行数。
    * usedVolumes  磁盘使用量。单位：GB
    * usedMemory  内存使用量。单位：MB
    * usedCpuPercent  CPU使用百分比。
    * nodeVolumeSize  node磁盘总大小。单位：GB
    * nodeMemorySize  node内存总大小。单位：MB
    * updateTime  更新时间。
    * applyRate  同步速度。单位：byte/s
    *
    * @var string[]
    */
    protected static $setters = [
            'bandwidth' => 'setBandwidth',
            'isSrcNormal' => 'setIsSrcNormal',
            'isDstNormal' => 'setIsDstNormal',
            'srcOffset' => 'setSrcOffset',
            'nodeOffset' => 'setNodeOffset',
            'dstOffset' => 'setDstOffset',
            'srcDelay' => 'setSrcDelay',
            'dstDelay' => 'setDstDelay',
            'srcRps' => 'setSrcRps',
            'srcIo' => 'setSrcIo',
            'dstRps' => 'setDstRps',
            'dstIo' => 'setDstIo',
            'transData' => 'setTransData',
            'transLines' => 'setTransLines',
            'usedVolumes' => 'setUsedVolumes',
            'usedMemory' => 'setUsedMemory',
            'usedCpuPercent' => 'setUsedCpuPercent',
            'nodeVolumeSize' => 'setNodeVolumeSize',
            'nodeMemorySize' => 'setNodeMemorySize',
            'updateTime' => 'setUpdateTime',
            'applyRate' => 'setApplyRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bandwidth  EIP带宽，单位：MB/S
    * isSrcNormal  源库连接状态是否正常。
    * isDstNormal  目标库连接状态是否正常。
    * srcOffset  源库offSet位点。
    * nodeOffset  迁移实例offSet位点。
    * dstOffset  目标库offSet位点。
    * srcDelay  源库时延。
    * dstDelay  目标库时延。
    * srcRps  源库RPS。
    * srcIo  源库IO。
    * dstRps  目标库RPS。
    * dstIo  目标库IO。
    * transData  迁移数据量。单位：MB
    * transLines  迁移数据行数。
    * usedVolumes  磁盘使用量。单位：GB
    * usedMemory  内存使用量。单位：MB
    * usedCpuPercent  CPU使用百分比。
    * nodeVolumeSize  node磁盘总大小。单位：GB
    * nodeMemorySize  node内存总大小。单位：MB
    * updateTime  更新时间。
    * applyRate  同步速度。单位：byte/s
    *
    * @var string[]
    */
    protected static $getters = [
            'bandwidth' => 'getBandwidth',
            'isSrcNormal' => 'getIsSrcNormal',
            'isDstNormal' => 'getIsDstNormal',
            'srcOffset' => 'getSrcOffset',
            'nodeOffset' => 'getNodeOffset',
            'dstOffset' => 'getDstOffset',
            'srcDelay' => 'getSrcDelay',
            'dstDelay' => 'getDstDelay',
            'srcRps' => 'getSrcRps',
            'srcIo' => 'getSrcIo',
            'dstRps' => 'getDstRps',
            'dstIo' => 'getDstIo',
            'transData' => 'getTransData',
            'transLines' => 'getTransLines',
            'usedVolumes' => 'getUsedVolumes',
            'usedMemory' => 'getUsedMemory',
            'usedCpuPercent' => 'getUsedCpuPercent',
            'nodeVolumeSize' => 'getNodeVolumeSize',
            'nodeMemorySize' => 'getNodeMemorySize',
            'updateTime' => 'getUpdateTime',
            'applyRate' => 'getApplyRate'
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
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['isSrcNormal'] = isset($data['isSrcNormal']) ? $data['isSrcNormal'] : null;
        $this->container['isDstNormal'] = isset($data['isDstNormal']) ? $data['isDstNormal'] : null;
        $this->container['srcOffset'] = isset($data['srcOffset']) ? $data['srcOffset'] : null;
        $this->container['nodeOffset'] = isset($data['nodeOffset']) ? $data['nodeOffset'] : null;
        $this->container['dstOffset'] = isset($data['dstOffset']) ? $data['dstOffset'] : null;
        $this->container['srcDelay'] = isset($data['srcDelay']) ? $data['srcDelay'] : null;
        $this->container['dstDelay'] = isset($data['dstDelay']) ? $data['dstDelay'] : null;
        $this->container['srcRps'] = isset($data['srcRps']) ? $data['srcRps'] : null;
        $this->container['srcIo'] = isset($data['srcIo']) ? $data['srcIo'] : null;
        $this->container['dstRps'] = isset($data['dstRps']) ? $data['dstRps'] : null;
        $this->container['dstIo'] = isset($data['dstIo']) ? $data['dstIo'] : null;
        $this->container['transData'] = isset($data['transData']) ? $data['transData'] : null;
        $this->container['transLines'] = isset($data['transLines']) ? $data['transLines'] : null;
        $this->container['usedVolumes'] = isset($data['usedVolumes']) ? $data['usedVolumes'] : null;
        $this->container['usedMemory'] = isset($data['usedMemory']) ? $data['usedMemory'] : null;
        $this->container['usedCpuPercent'] = isset($data['usedCpuPercent']) ? $data['usedCpuPercent'] : null;
        $this->container['nodeVolumeSize'] = isset($data['nodeVolumeSize']) ? $data['nodeVolumeSize'] : null;
        $this->container['nodeMemorySize'] = isset($data['nodeMemorySize']) ? $data['nodeMemorySize'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['applyRate'] = isset($data['applyRate']) ? $data['applyRate'] : null;
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
    * Gets bandwidth
    *  EIP带宽，单位：MB/S
    *
    * @return string|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param string|null $bandwidth EIP带宽，单位：MB/S
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets isSrcNormal
    *  源库连接状态是否正常。
    *
    * @return bool|null
    */
    public function getIsSrcNormal()
    {
        return $this->container['isSrcNormal'];
    }

    /**
    * Sets isSrcNormal
    *
    * @param bool|null $isSrcNormal 源库连接状态是否正常。
    *
    * @return $this
    */
    public function setIsSrcNormal($isSrcNormal)
    {
        $this->container['isSrcNormal'] = $isSrcNormal;
        return $this;
    }

    /**
    * Gets isDstNormal
    *  目标库连接状态是否正常。
    *
    * @return bool|null
    */
    public function getIsDstNormal()
    {
        return $this->container['isDstNormal'];
    }

    /**
    * Sets isDstNormal
    *
    * @param bool|null $isDstNormal 目标库连接状态是否正常。
    *
    * @return $this
    */
    public function setIsDstNormal($isDstNormal)
    {
        $this->container['isDstNormal'] = $isDstNormal;
        return $this;
    }

    /**
    * Gets srcOffset
    *  源库offSet位点。
    *
    * @return string|null
    */
    public function getSrcOffset()
    {
        return $this->container['srcOffset'];
    }

    /**
    * Sets srcOffset
    *
    * @param string|null $srcOffset 源库offSet位点。
    *
    * @return $this
    */
    public function setSrcOffset($srcOffset)
    {
        $this->container['srcOffset'] = $srcOffset;
        return $this;
    }

    /**
    * Gets nodeOffset
    *  迁移实例offSet位点。
    *
    * @return string|null
    */
    public function getNodeOffset()
    {
        return $this->container['nodeOffset'];
    }

    /**
    * Sets nodeOffset
    *
    * @param string|null $nodeOffset 迁移实例offSet位点。
    *
    * @return $this
    */
    public function setNodeOffset($nodeOffset)
    {
        $this->container['nodeOffset'] = $nodeOffset;
        return $this;
    }

    /**
    * Gets dstOffset
    *  目标库offSet位点。
    *
    * @return string|null
    */
    public function getDstOffset()
    {
        return $this->container['dstOffset'];
    }

    /**
    * Sets dstOffset
    *
    * @param string|null $dstOffset 目标库offSet位点。
    *
    * @return $this
    */
    public function setDstOffset($dstOffset)
    {
        $this->container['dstOffset'] = $dstOffset;
        return $this;
    }

    /**
    * Gets srcDelay
    *  源库时延。
    *
    * @return int|null
    */
    public function getSrcDelay()
    {
        return $this->container['srcDelay'];
    }

    /**
    * Sets srcDelay
    *
    * @param int|null $srcDelay 源库时延。
    *
    * @return $this
    */
    public function setSrcDelay($srcDelay)
    {
        $this->container['srcDelay'] = $srcDelay;
        return $this;
    }

    /**
    * Gets dstDelay
    *  目标库时延。
    *
    * @return int|null
    */
    public function getDstDelay()
    {
        return $this->container['dstDelay'];
    }

    /**
    * Sets dstDelay
    *
    * @param int|null $dstDelay 目标库时延。
    *
    * @return $this
    */
    public function setDstDelay($dstDelay)
    {
        $this->container['dstDelay'] = $dstDelay;
        return $this;
    }

    /**
    * Gets srcRps
    *  源库RPS。
    *
    * @return string|null
    */
    public function getSrcRps()
    {
        return $this->container['srcRps'];
    }

    /**
    * Sets srcRps
    *
    * @param string|null $srcRps 源库RPS。
    *
    * @return $this
    */
    public function setSrcRps($srcRps)
    {
        $this->container['srcRps'] = $srcRps;
        return $this;
    }

    /**
    * Gets srcIo
    *  源库IO。
    *
    * @return string|null
    */
    public function getSrcIo()
    {
        return $this->container['srcIo'];
    }

    /**
    * Sets srcIo
    *
    * @param string|null $srcIo 源库IO。
    *
    * @return $this
    */
    public function setSrcIo($srcIo)
    {
        $this->container['srcIo'] = $srcIo;
        return $this;
    }

    /**
    * Gets dstRps
    *  目标库RPS。
    *
    * @return string|null
    */
    public function getDstRps()
    {
        return $this->container['dstRps'];
    }

    /**
    * Sets dstRps
    *
    * @param string|null $dstRps 目标库RPS。
    *
    * @return $this
    */
    public function setDstRps($dstRps)
    {
        $this->container['dstRps'] = $dstRps;
        return $this;
    }

    /**
    * Gets dstIo
    *  目标库IO。
    *
    * @return string|null
    */
    public function getDstIo()
    {
        return $this->container['dstIo'];
    }

    /**
    * Sets dstIo
    *
    * @param string|null $dstIo 目标库IO。
    *
    * @return $this
    */
    public function setDstIo($dstIo)
    {
        $this->container['dstIo'] = $dstIo;
        return $this;
    }

    /**
    * Gets transData
    *  迁移数据量。单位：MB
    *
    * @return string|null
    */
    public function getTransData()
    {
        return $this->container['transData'];
    }

    /**
    * Sets transData
    *
    * @param string|null $transData 迁移数据量。单位：MB
    *
    * @return $this
    */
    public function setTransData($transData)
    {
        $this->container['transData'] = $transData;
        return $this;
    }

    /**
    * Gets transLines
    *  迁移数据行数。
    *
    * @return string|null
    */
    public function getTransLines()
    {
        return $this->container['transLines'];
    }

    /**
    * Sets transLines
    *
    * @param string|null $transLines 迁移数据行数。
    *
    * @return $this
    */
    public function setTransLines($transLines)
    {
        $this->container['transLines'] = $transLines;
        return $this;
    }

    /**
    * Gets usedVolumes
    *  磁盘使用量。单位：GB
    *
    * @return string|null
    */
    public function getUsedVolumes()
    {
        return $this->container['usedVolumes'];
    }

    /**
    * Sets usedVolumes
    *
    * @param string|null $usedVolumes 磁盘使用量。单位：GB
    *
    * @return $this
    */
    public function setUsedVolumes($usedVolumes)
    {
        $this->container['usedVolumes'] = $usedVolumes;
        return $this;
    }

    /**
    * Gets usedMemory
    *  内存使用量。单位：MB
    *
    * @return string|null
    */
    public function getUsedMemory()
    {
        return $this->container['usedMemory'];
    }

    /**
    * Sets usedMemory
    *
    * @param string|null $usedMemory 内存使用量。单位：MB
    *
    * @return $this
    */
    public function setUsedMemory($usedMemory)
    {
        $this->container['usedMemory'] = $usedMemory;
        return $this;
    }

    /**
    * Gets usedCpuPercent
    *  CPU使用百分比。
    *
    * @return string|null
    */
    public function getUsedCpuPercent()
    {
        return $this->container['usedCpuPercent'];
    }

    /**
    * Sets usedCpuPercent
    *
    * @param string|null $usedCpuPercent CPU使用百分比。
    *
    * @return $this
    */
    public function setUsedCpuPercent($usedCpuPercent)
    {
        $this->container['usedCpuPercent'] = $usedCpuPercent;
        return $this;
    }

    /**
    * Gets nodeVolumeSize
    *  node磁盘总大小。单位：GB
    *
    * @return int|null
    */
    public function getNodeVolumeSize()
    {
        return $this->container['nodeVolumeSize'];
    }

    /**
    * Sets nodeVolumeSize
    *
    * @param int|null $nodeVolumeSize node磁盘总大小。单位：GB
    *
    * @return $this
    */
    public function setNodeVolumeSize($nodeVolumeSize)
    {
        $this->container['nodeVolumeSize'] = $nodeVolumeSize;
        return $this;
    }

    /**
    * Gets nodeMemorySize
    *  node内存总大小。单位：MB
    *
    * @return int|null
    */
    public function getNodeMemorySize()
    {
        return $this->container['nodeMemorySize'];
    }

    /**
    * Sets nodeMemorySize
    *
    * @param int|null $nodeMemorySize node内存总大小。单位：MB
    *
    * @return $this
    */
    public function setNodeMemorySize($nodeMemorySize)
    {
        $this->container['nodeMemorySize'] = $nodeMemorySize;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets applyRate
    *  同步速度。单位：byte/s
    *
    * @return int|null
    */
    public function getApplyRate()
    {
        return $this->container['applyRate'];
    }

    /**
    * Sets applyRate
    *
    * @param int|null $applyRate 同步速度。单位：byte/s
    *
    * @return $this
    */
    public function setApplyRate($applyRate)
    {
        $this->container['applyRate'] = $applyRate;
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

