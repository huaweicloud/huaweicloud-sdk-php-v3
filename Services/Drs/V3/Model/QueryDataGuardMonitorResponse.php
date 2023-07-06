<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryDataGuardMonitorResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryDataGuardMonitorResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bandwidth  带宽。
    * cpuUsedPercent  cpu百分比。
    * dstDelay  目标库时延。
    * dstIo  目标io。
    * dstNormal  目标库连接状态。
    * dstOffset  目标库offSet位点。
    * dstRps  目标rps。
    * memUsedInMb  内存使用。
    * nodeMemInMb  node内存总大小。
    * nodeOffset  迁移实例offSet位点。
    * nodeVolumeInGb  node磁盘总大小。
    * srDelay  源库时延。
    * srOffset  源库offSet位点。
    * srcIo  源io。
    * srcNormal  源库连接状态。
    * srcRps  源rps。
    * transInMb  迁移数据量。
    * transLines  迁移数据行数。
    * volumeUsedInGb  磁盘使用。
    * migrationBytesPerSecond  每秒迁移字节大小。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bandwidth' => 'string',
            'cpuUsedPercent' => 'string',
            'dstDelay' => 'int',
            'dstIo' => 'string',
            'dstNormal' => 'bool',
            'dstOffset' => 'string',
            'dstRps' => 'string',
            'memUsedInMb' => 'string',
            'nodeMemInMb' => 'int',
            'nodeOffset' => 'string',
            'nodeVolumeInGb' => 'int',
            'srDelay' => 'int',
            'srOffset' => 'string',
            'srcIo' => 'string',
            'srcNormal' => 'bool',
            'srcRps' => 'string',
            'transInMb' => 'string',
            'transLines' => 'string',
            'volumeUsedInGb' => 'string',
            'migrationBytesPerSecond' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bandwidth  带宽。
    * cpuUsedPercent  cpu百分比。
    * dstDelay  目标库时延。
    * dstIo  目标io。
    * dstNormal  目标库连接状态。
    * dstOffset  目标库offSet位点。
    * dstRps  目标rps。
    * memUsedInMb  内存使用。
    * nodeMemInMb  node内存总大小。
    * nodeOffset  迁移实例offSet位点。
    * nodeVolumeInGb  node磁盘总大小。
    * srDelay  源库时延。
    * srOffset  源库offSet位点。
    * srcIo  源io。
    * srcNormal  源库连接状态。
    * srcRps  源rps。
    * transInMb  迁移数据量。
    * transLines  迁移数据行数。
    * volumeUsedInGb  磁盘使用。
    * migrationBytesPerSecond  每秒迁移字节大小。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bandwidth' => null,
        'cpuUsedPercent' => null,
        'dstDelay' => 'int64',
        'dstIo' => null,
        'dstNormal' => null,
        'dstOffset' => null,
        'dstRps' => null,
        'memUsedInMb' => null,
        'nodeMemInMb' => 'int64',
        'nodeOffset' => null,
        'nodeVolumeInGb' => 'int64',
        'srDelay' => 'int64',
        'srOffset' => null,
        'srcIo' => null,
        'srcNormal' => null,
        'srcRps' => null,
        'transInMb' => null,
        'transLines' => null,
        'volumeUsedInGb' => null,
        'migrationBytesPerSecond' => 'int64'
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
    * bandwidth  带宽。
    * cpuUsedPercent  cpu百分比。
    * dstDelay  目标库时延。
    * dstIo  目标io。
    * dstNormal  目标库连接状态。
    * dstOffset  目标库offSet位点。
    * dstRps  目标rps。
    * memUsedInMb  内存使用。
    * nodeMemInMb  node内存总大小。
    * nodeOffset  迁移实例offSet位点。
    * nodeVolumeInGb  node磁盘总大小。
    * srDelay  源库时延。
    * srOffset  源库offSet位点。
    * srcIo  源io。
    * srcNormal  源库连接状态。
    * srcRps  源rps。
    * transInMb  迁移数据量。
    * transLines  迁移数据行数。
    * volumeUsedInGb  磁盘使用。
    * migrationBytesPerSecond  每秒迁移字节大小。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bandwidth' => 'bandwidth',
            'cpuUsedPercent' => 'cpuUsed_percent',
            'dstDelay' => 'dst_delay',
            'dstIo' => 'dst_io',
            'dstNormal' => 'dst_normal',
            'dstOffset' => 'dst_offset',
            'dstRps' => 'dst_rps',
            'memUsedInMb' => 'mem_used_inMB',
            'nodeMemInMb' => 'node_mem_inMB',
            'nodeOffset' => 'node_offset',
            'nodeVolumeInGb' => 'node_volume_inGB',
            'srDelay' => 'sr_delay',
            'srOffset' => 'sr_offset',
            'srcIo' => 'src_io',
            'srcNormal' => 'src_normal',
            'srcRps' => 'src_rps',
            'transInMb' => 'trans_inMB',
            'transLines' => 'trans_lines',
            'volumeUsedInGb' => 'volume_used_inGB',
            'migrationBytesPerSecond' => 'migration_bytes_per_second'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bandwidth  带宽。
    * cpuUsedPercent  cpu百分比。
    * dstDelay  目标库时延。
    * dstIo  目标io。
    * dstNormal  目标库连接状态。
    * dstOffset  目标库offSet位点。
    * dstRps  目标rps。
    * memUsedInMb  内存使用。
    * nodeMemInMb  node内存总大小。
    * nodeOffset  迁移实例offSet位点。
    * nodeVolumeInGb  node磁盘总大小。
    * srDelay  源库时延。
    * srOffset  源库offSet位点。
    * srcIo  源io。
    * srcNormal  源库连接状态。
    * srcRps  源rps。
    * transInMb  迁移数据量。
    * transLines  迁移数据行数。
    * volumeUsedInGb  磁盘使用。
    * migrationBytesPerSecond  每秒迁移字节大小。
    *
    * @var string[]
    */
    protected static $setters = [
            'bandwidth' => 'setBandwidth',
            'cpuUsedPercent' => 'setCpuUsedPercent',
            'dstDelay' => 'setDstDelay',
            'dstIo' => 'setDstIo',
            'dstNormal' => 'setDstNormal',
            'dstOffset' => 'setDstOffset',
            'dstRps' => 'setDstRps',
            'memUsedInMb' => 'setMemUsedInMb',
            'nodeMemInMb' => 'setNodeMemInMb',
            'nodeOffset' => 'setNodeOffset',
            'nodeVolumeInGb' => 'setNodeVolumeInGb',
            'srDelay' => 'setSrDelay',
            'srOffset' => 'setSrOffset',
            'srcIo' => 'setSrcIo',
            'srcNormal' => 'setSrcNormal',
            'srcRps' => 'setSrcRps',
            'transInMb' => 'setTransInMb',
            'transLines' => 'setTransLines',
            'volumeUsedInGb' => 'setVolumeUsedInGb',
            'migrationBytesPerSecond' => 'setMigrationBytesPerSecond'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bandwidth  带宽。
    * cpuUsedPercent  cpu百分比。
    * dstDelay  目标库时延。
    * dstIo  目标io。
    * dstNormal  目标库连接状态。
    * dstOffset  目标库offSet位点。
    * dstRps  目标rps。
    * memUsedInMb  内存使用。
    * nodeMemInMb  node内存总大小。
    * nodeOffset  迁移实例offSet位点。
    * nodeVolumeInGb  node磁盘总大小。
    * srDelay  源库时延。
    * srOffset  源库offSet位点。
    * srcIo  源io。
    * srcNormal  源库连接状态。
    * srcRps  源rps。
    * transInMb  迁移数据量。
    * transLines  迁移数据行数。
    * volumeUsedInGb  磁盘使用。
    * migrationBytesPerSecond  每秒迁移字节大小。
    *
    * @var string[]
    */
    protected static $getters = [
            'bandwidth' => 'getBandwidth',
            'cpuUsedPercent' => 'getCpuUsedPercent',
            'dstDelay' => 'getDstDelay',
            'dstIo' => 'getDstIo',
            'dstNormal' => 'getDstNormal',
            'dstOffset' => 'getDstOffset',
            'dstRps' => 'getDstRps',
            'memUsedInMb' => 'getMemUsedInMb',
            'nodeMemInMb' => 'getNodeMemInMb',
            'nodeOffset' => 'getNodeOffset',
            'nodeVolumeInGb' => 'getNodeVolumeInGb',
            'srDelay' => 'getSrDelay',
            'srOffset' => 'getSrOffset',
            'srcIo' => 'getSrcIo',
            'srcNormal' => 'getSrcNormal',
            'srcRps' => 'getSrcRps',
            'transInMb' => 'getTransInMb',
            'transLines' => 'getTransLines',
            'volumeUsedInGb' => 'getVolumeUsedInGb',
            'migrationBytesPerSecond' => 'getMigrationBytesPerSecond'
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
        $this->container['cpuUsedPercent'] = isset($data['cpuUsedPercent']) ? $data['cpuUsedPercent'] : null;
        $this->container['dstDelay'] = isset($data['dstDelay']) ? $data['dstDelay'] : null;
        $this->container['dstIo'] = isset($data['dstIo']) ? $data['dstIo'] : null;
        $this->container['dstNormal'] = isset($data['dstNormal']) ? $data['dstNormal'] : null;
        $this->container['dstOffset'] = isset($data['dstOffset']) ? $data['dstOffset'] : null;
        $this->container['dstRps'] = isset($data['dstRps']) ? $data['dstRps'] : null;
        $this->container['memUsedInMb'] = isset($data['memUsedInMb']) ? $data['memUsedInMb'] : null;
        $this->container['nodeMemInMb'] = isset($data['nodeMemInMb']) ? $data['nodeMemInMb'] : null;
        $this->container['nodeOffset'] = isset($data['nodeOffset']) ? $data['nodeOffset'] : null;
        $this->container['nodeVolumeInGb'] = isset($data['nodeVolumeInGb']) ? $data['nodeVolumeInGb'] : null;
        $this->container['srDelay'] = isset($data['srDelay']) ? $data['srDelay'] : null;
        $this->container['srOffset'] = isset($data['srOffset']) ? $data['srOffset'] : null;
        $this->container['srcIo'] = isset($data['srcIo']) ? $data['srcIo'] : null;
        $this->container['srcNormal'] = isset($data['srcNormal']) ? $data['srcNormal'] : null;
        $this->container['srcRps'] = isset($data['srcRps']) ? $data['srcRps'] : null;
        $this->container['transInMb'] = isset($data['transInMb']) ? $data['transInMb'] : null;
        $this->container['transLines'] = isset($data['transLines']) ? $data['transLines'] : null;
        $this->container['volumeUsedInGb'] = isset($data['volumeUsedInGb']) ? $data['volumeUsedInGb'] : null;
        $this->container['migrationBytesPerSecond'] = isset($data['migrationBytesPerSecond']) ? $data['migrationBytesPerSecond'] : null;
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
    *  带宽。
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
    * @param string|null $bandwidth 带宽。
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets cpuUsedPercent
    *  cpu百分比。
    *
    * @return string|null
    */
    public function getCpuUsedPercent()
    {
        return $this->container['cpuUsedPercent'];
    }

    /**
    * Sets cpuUsedPercent
    *
    * @param string|null $cpuUsedPercent cpu百分比。
    *
    * @return $this
    */
    public function setCpuUsedPercent($cpuUsedPercent)
    {
        $this->container['cpuUsedPercent'] = $cpuUsedPercent;
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
    * Gets dstIo
    *  目标io。
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
    * @param string|null $dstIo 目标io。
    *
    * @return $this
    */
    public function setDstIo($dstIo)
    {
        $this->container['dstIo'] = $dstIo;
        return $this;
    }

    /**
    * Gets dstNormal
    *  目标库连接状态。
    *
    * @return bool|null
    */
    public function getDstNormal()
    {
        return $this->container['dstNormal'];
    }

    /**
    * Sets dstNormal
    *
    * @param bool|null $dstNormal 目标库连接状态。
    *
    * @return $this
    */
    public function setDstNormal($dstNormal)
    {
        $this->container['dstNormal'] = $dstNormal;
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
    * Gets dstRps
    *  目标rps。
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
    * @param string|null $dstRps 目标rps。
    *
    * @return $this
    */
    public function setDstRps($dstRps)
    {
        $this->container['dstRps'] = $dstRps;
        return $this;
    }

    /**
    * Gets memUsedInMb
    *  内存使用。
    *
    * @return string|null
    */
    public function getMemUsedInMb()
    {
        return $this->container['memUsedInMb'];
    }

    /**
    * Sets memUsedInMb
    *
    * @param string|null $memUsedInMb 内存使用。
    *
    * @return $this
    */
    public function setMemUsedInMb($memUsedInMb)
    {
        $this->container['memUsedInMb'] = $memUsedInMb;
        return $this;
    }

    /**
    * Gets nodeMemInMb
    *  node内存总大小。
    *
    * @return int|null
    */
    public function getNodeMemInMb()
    {
        return $this->container['nodeMemInMb'];
    }

    /**
    * Sets nodeMemInMb
    *
    * @param int|null $nodeMemInMb node内存总大小。
    *
    * @return $this
    */
    public function setNodeMemInMb($nodeMemInMb)
    {
        $this->container['nodeMemInMb'] = $nodeMemInMb;
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
    * Gets nodeVolumeInGb
    *  node磁盘总大小。
    *
    * @return int|null
    */
    public function getNodeVolumeInGb()
    {
        return $this->container['nodeVolumeInGb'];
    }

    /**
    * Sets nodeVolumeInGb
    *
    * @param int|null $nodeVolumeInGb node磁盘总大小。
    *
    * @return $this
    */
    public function setNodeVolumeInGb($nodeVolumeInGb)
    {
        $this->container['nodeVolumeInGb'] = $nodeVolumeInGb;
        return $this;
    }

    /**
    * Gets srDelay
    *  源库时延。
    *
    * @return int|null
    */
    public function getSrDelay()
    {
        return $this->container['srDelay'];
    }

    /**
    * Sets srDelay
    *
    * @param int|null $srDelay 源库时延。
    *
    * @return $this
    */
    public function setSrDelay($srDelay)
    {
        $this->container['srDelay'] = $srDelay;
        return $this;
    }

    /**
    * Gets srOffset
    *  源库offSet位点。
    *
    * @return string|null
    */
    public function getSrOffset()
    {
        return $this->container['srOffset'];
    }

    /**
    * Sets srOffset
    *
    * @param string|null $srOffset 源库offSet位点。
    *
    * @return $this
    */
    public function setSrOffset($srOffset)
    {
        $this->container['srOffset'] = $srOffset;
        return $this;
    }

    /**
    * Gets srcIo
    *  源io。
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
    * @param string|null $srcIo 源io。
    *
    * @return $this
    */
    public function setSrcIo($srcIo)
    {
        $this->container['srcIo'] = $srcIo;
        return $this;
    }

    /**
    * Gets srcNormal
    *  源库连接状态。
    *
    * @return bool|null
    */
    public function getSrcNormal()
    {
        return $this->container['srcNormal'];
    }

    /**
    * Sets srcNormal
    *
    * @param bool|null $srcNormal 源库连接状态。
    *
    * @return $this
    */
    public function setSrcNormal($srcNormal)
    {
        $this->container['srcNormal'] = $srcNormal;
        return $this;
    }

    /**
    * Gets srcRps
    *  源rps。
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
    * @param string|null $srcRps 源rps。
    *
    * @return $this
    */
    public function setSrcRps($srcRps)
    {
        $this->container['srcRps'] = $srcRps;
        return $this;
    }

    /**
    * Gets transInMb
    *  迁移数据量。
    *
    * @return string|null
    */
    public function getTransInMb()
    {
        return $this->container['transInMb'];
    }

    /**
    * Sets transInMb
    *
    * @param string|null $transInMb 迁移数据量。
    *
    * @return $this
    */
    public function setTransInMb($transInMb)
    {
        $this->container['transInMb'] = $transInMb;
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
    * Gets volumeUsedInGb
    *  磁盘使用。
    *
    * @return string|null
    */
    public function getVolumeUsedInGb()
    {
        return $this->container['volumeUsedInGb'];
    }

    /**
    * Sets volumeUsedInGb
    *
    * @param string|null $volumeUsedInGb 磁盘使用。
    *
    * @return $this
    */
    public function setVolumeUsedInGb($volumeUsedInGb)
    {
        $this->container['volumeUsedInGb'] = $volumeUsedInGb;
        return $this;
    }

    /**
    * Gets migrationBytesPerSecond
    *  每秒迁移字节大小。
    *
    * @return int|null
    */
    public function getMigrationBytesPerSecond()
    {
        return $this->container['migrationBytesPerSecond'];
    }

    /**
    * Sets migrationBytesPerSecond
    *
    * @param int|null $migrationBytesPerSecond 每秒迁移字节大小。
    *
    * @return $this
    */
    public function setMigrationBytesPerSecond($migrationBytesPerSecond)
    {
        $this->container['migrationBytesPerSecond'] = $migrationBytesPerSecond;
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

