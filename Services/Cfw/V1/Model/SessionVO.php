<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SessionVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SessionVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * app  **参数解释**： 应用 **取值范围**： 不涉及
    * bytes  **参数解释**： 字节数 **取值范围**： 不涉及
    * dstAssociateInstanceType  **参数解释**： 目的IP关联资产类型 **取值范围**： 不涉及
    * dstDeviceName  **参数解释**： 目的IP关联资产名称 **取值范围**： 不涉及
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： 目的端口 **取值范围**： 不涉及
    * dstHost  **参数解释**： 目的域名 **取值范围**： 不涉及
    * dstRegionId  **参数解释**： 目的regionID **取值范围**： 不涉及
    * dstRegionName  **参数解释**： 目的地区 **取值范围**： 不涉及
    * endTime  **参数解释**： 结束时间 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * requestByte  **参数解释**： 请求字节数 **取值范围**： 不涉及
    * responseByte  **参数解释**： 响应字节数 **取值范围**： 不涉及
    * sessions  **参数解释**： 会话数量 **取值范围**： 不涉及
    * srcAssociateInstanceType  **参数解释**： 源IP关联资产类型 **取值范围**： 不涉及
    * srcDeviceName  **参数解释**： 源IP关联资产名称 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源IP **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区 ID **取值范围**： 不涉及
    * srcRegionName  **参数解释**： 源地区 **取值范围**： 不涉及
    * startTime  **参数解释**： 会话开始时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'app' => 'string',
            'bytes' => 'double',
            'dstAssociateInstanceType' => 'string',
            'dstDeviceName' => 'string',
            'dstIp' => 'string',
            'dstPort' => 'string',
            'dstHost' => 'string',
            'dstRegionId' => 'string',
            'dstRegionName' => 'string',
            'endTime' => 'int',
            'protocol' => 'string',
            'requestByte' => 'double',
            'responseByte' => 'double',
            'sessions' => 'int',
            'srcAssociateInstanceType' => 'string',
            'srcDeviceName' => 'string',
            'srcIp' => 'string',
            'srcRegionId' => 'string',
            'srcRegionName' => 'string',
            'startTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * app  **参数解释**： 应用 **取值范围**： 不涉及
    * bytes  **参数解释**： 字节数 **取值范围**： 不涉及
    * dstAssociateInstanceType  **参数解释**： 目的IP关联资产类型 **取值范围**： 不涉及
    * dstDeviceName  **参数解释**： 目的IP关联资产名称 **取值范围**： 不涉及
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： 目的端口 **取值范围**： 不涉及
    * dstHost  **参数解释**： 目的域名 **取值范围**： 不涉及
    * dstRegionId  **参数解释**： 目的regionID **取值范围**： 不涉及
    * dstRegionName  **参数解释**： 目的地区 **取值范围**： 不涉及
    * endTime  **参数解释**： 结束时间 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * requestByte  **参数解释**： 请求字节数 **取值范围**： 不涉及
    * responseByte  **参数解释**： 响应字节数 **取值范围**： 不涉及
    * sessions  **参数解释**： 会话数量 **取值范围**： 不涉及
    * srcAssociateInstanceType  **参数解释**： 源IP关联资产类型 **取值范围**： 不涉及
    * srcDeviceName  **参数解释**： 源IP关联资产名称 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源IP **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区 ID **取值范围**： 不涉及
    * srcRegionName  **参数解释**： 源地区 **取值范围**： 不涉及
    * startTime  **参数解释**： 会话开始时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'app' => null,
        'bytes' => 'double',
        'dstAssociateInstanceType' => null,
        'dstDeviceName' => null,
        'dstIp' => null,
        'dstPort' => null,
        'dstHost' => null,
        'dstRegionId' => null,
        'dstRegionName' => null,
        'endTime' => 'int64',
        'protocol' => null,
        'requestByte' => 'double',
        'responseByte' => 'double',
        'sessions' => 'int64',
        'srcAssociateInstanceType' => null,
        'srcDeviceName' => null,
        'srcIp' => null,
        'srcRegionId' => null,
        'srcRegionName' => null,
        'startTime' => 'int64'
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
    * app  **参数解释**： 应用 **取值范围**： 不涉及
    * bytes  **参数解释**： 字节数 **取值范围**： 不涉及
    * dstAssociateInstanceType  **参数解释**： 目的IP关联资产类型 **取值范围**： 不涉及
    * dstDeviceName  **参数解释**： 目的IP关联资产名称 **取值范围**： 不涉及
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： 目的端口 **取值范围**： 不涉及
    * dstHost  **参数解释**： 目的域名 **取值范围**： 不涉及
    * dstRegionId  **参数解释**： 目的regionID **取值范围**： 不涉及
    * dstRegionName  **参数解释**： 目的地区 **取值范围**： 不涉及
    * endTime  **参数解释**： 结束时间 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * requestByte  **参数解释**： 请求字节数 **取值范围**： 不涉及
    * responseByte  **参数解释**： 响应字节数 **取值范围**： 不涉及
    * sessions  **参数解释**： 会话数量 **取值范围**： 不涉及
    * srcAssociateInstanceType  **参数解释**： 源IP关联资产类型 **取值范围**： 不涉及
    * srcDeviceName  **参数解释**： 源IP关联资产名称 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源IP **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区 ID **取值范围**： 不涉及
    * srcRegionName  **参数解释**： 源地区 **取值范围**： 不涉及
    * startTime  **参数解释**： 会话开始时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'app' => 'app',
            'bytes' => 'bytes',
            'dstAssociateInstanceType' => 'dst_associate_instance_type',
            'dstDeviceName' => 'dst_device_name',
            'dstIp' => 'dst_ip',
            'dstPort' => 'dst_port',
            'dstHost' => 'dst_host',
            'dstRegionId' => 'dst_region_id',
            'dstRegionName' => 'dst_region_name',
            'endTime' => 'end_time',
            'protocol' => 'protocol',
            'requestByte' => 'request_byte',
            'responseByte' => 'response_byte',
            'sessions' => 'sessions',
            'srcAssociateInstanceType' => 'src_associate_instance_type',
            'srcDeviceName' => 'src_device_name',
            'srcIp' => 'src_ip',
            'srcRegionId' => 'src_region_id',
            'srcRegionName' => 'src_region_name',
            'startTime' => 'start_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * app  **参数解释**： 应用 **取值范围**： 不涉及
    * bytes  **参数解释**： 字节数 **取值范围**： 不涉及
    * dstAssociateInstanceType  **参数解释**： 目的IP关联资产类型 **取值范围**： 不涉及
    * dstDeviceName  **参数解释**： 目的IP关联资产名称 **取值范围**： 不涉及
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： 目的端口 **取值范围**： 不涉及
    * dstHost  **参数解释**： 目的域名 **取值范围**： 不涉及
    * dstRegionId  **参数解释**： 目的regionID **取值范围**： 不涉及
    * dstRegionName  **参数解释**： 目的地区 **取值范围**： 不涉及
    * endTime  **参数解释**： 结束时间 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * requestByte  **参数解释**： 请求字节数 **取值范围**： 不涉及
    * responseByte  **参数解释**： 响应字节数 **取值范围**： 不涉及
    * sessions  **参数解释**： 会话数量 **取值范围**： 不涉及
    * srcAssociateInstanceType  **参数解释**： 源IP关联资产类型 **取值范围**： 不涉及
    * srcDeviceName  **参数解释**： 源IP关联资产名称 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源IP **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区 ID **取值范围**： 不涉及
    * srcRegionName  **参数解释**： 源地区 **取值范围**： 不涉及
    * startTime  **参数解释**： 会话开始时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'app' => 'setApp',
            'bytes' => 'setBytes',
            'dstAssociateInstanceType' => 'setDstAssociateInstanceType',
            'dstDeviceName' => 'setDstDeviceName',
            'dstIp' => 'setDstIp',
            'dstPort' => 'setDstPort',
            'dstHost' => 'setDstHost',
            'dstRegionId' => 'setDstRegionId',
            'dstRegionName' => 'setDstRegionName',
            'endTime' => 'setEndTime',
            'protocol' => 'setProtocol',
            'requestByte' => 'setRequestByte',
            'responseByte' => 'setResponseByte',
            'sessions' => 'setSessions',
            'srcAssociateInstanceType' => 'setSrcAssociateInstanceType',
            'srcDeviceName' => 'setSrcDeviceName',
            'srcIp' => 'setSrcIp',
            'srcRegionId' => 'setSrcRegionId',
            'srcRegionName' => 'setSrcRegionName',
            'startTime' => 'setStartTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * app  **参数解释**： 应用 **取值范围**： 不涉及
    * bytes  **参数解释**： 字节数 **取值范围**： 不涉及
    * dstAssociateInstanceType  **参数解释**： 目的IP关联资产类型 **取值范围**： 不涉及
    * dstDeviceName  **参数解释**： 目的IP关联资产名称 **取值范围**： 不涉及
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： 目的端口 **取值范围**： 不涉及
    * dstHost  **参数解释**： 目的域名 **取值范围**： 不涉及
    * dstRegionId  **参数解释**： 目的regionID **取值范围**： 不涉及
    * dstRegionName  **参数解释**： 目的地区 **取值范围**： 不涉及
    * endTime  **参数解释**： 结束时间 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * requestByte  **参数解释**： 请求字节数 **取值范围**： 不涉及
    * responseByte  **参数解释**： 响应字节数 **取值范围**： 不涉及
    * sessions  **参数解释**： 会话数量 **取值范围**： 不涉及
    * srcAssociateInstanceType  **参数解释**： 源IP关联资产类型 **取值范围**： 不涉及
    * srcDeviceName  **参数解释**： 源IP关联资产名称 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源IP **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区 ID **取值范围**： 不涉及
    * srcRegionName  **参数解释**： 源地区 **取值范围**： 不涉及
    * startTime  **参数解释**： 会话开始时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'app' => 'getApp',
            'bytes' => 'getBytes',
            'dstAssociateInstanceType' => 'getDstAssociateInstanceType',
            'dstDeviceName' => 'getDstDeviceName',
            'dstIp' => 'getDstIp',
            'dstPort' => 'getDstPort',
            'dstHost' => 'getDstHost',
            'dstRegionId' => 'getDstRegionId',
            'dstRegionName' => 'getDstRegionName',
            'endTime' => 'getEndTime',
            'protocol' => 'getProtocol',
            'requestByte' => 'getRequestByte',
            'responseByte' => 'getResponseByte',
            'sessions' => 'getSessions',
            'srcAssociateInstanceType' => 'getSrcAssociateInstanceType',
            'srcDeviceName' => 'getSrcDeviceName',
            'srcIp' => 'getSrcIp',
            'srcRegionId' => 'getSrcRegionId',
            'srcRegionName' => 'getSrcRegionName',
            'startTime' => 'getStartTime'
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
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['bytes'] = isset($data['bytes']) ? $data['bytes'] : null;
        $this->container['dstAssociateInstanceType'] = isset($data['dstAssociateInstanceType']) ? $data['dstAssociateInstanceType'] : null;
        $this->container['dstDeviceName'] = isset($data['dstDeviceName']) ? $data['dstDeviceName'] : null;
        $this->container['dstIp'] = isset($data['dstIp']) ? $data['dstIp'] : null;
        $this->container['dstPort'] = isset($data['dstPort']) ? $data['dstPort'] : null;
        $this->container['dstHost'] = isset($data['dstHost']) ? $data['dstHost'] : null;
        $this->container['dstRegionId'] = isset($data['dstRegionId']) ? $data['dstRegionId'] : null;
        $this->container['dstRegionName'] = isset($data['dstRegionName']) ? $data['dstRegionName'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['requestByte'] = isset($data['requestByte']) ? $data['requestByte'] : null;
        $this->container['responseByte'] = isset($data['responseByte']) ? $data['responseByte'] : null;
        $this->container['sessions'] = isset($data['sessions']) ? $data['sessions'] : null;
        $this->container['srcAssociateInstanceType'] = isset($data['srcAssociateInstanceType']) ? $data['srcAssociateInstanceType'] : null;
        $this->container['srcDeviceName'] = isset($data['srcDeviceName']) ? $data['srcDeviceName'] : null;
        $this->container['srcIp'] = isset($data['srcIp']) ? $data['srcIp'] : null;
        $this->container['srcRegionId'] = isset($data['srcRegionId']) ? $data['srcRegionId'] : null;
        $this->container['srcRegionName'] = isset($data['srcRegionName']) ? $data['srcRegionName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
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
    * Gets app
    *  **参数解释**： 应用 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param string|null $app **参数解释**： 应用 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
        return $this;
    }

    /**
    * Gets bytes
    *  **参数解释**： 字节数 **取值范围**： 不涉及
    *
    * @return double|null
    */
    public function getBytes()
    {
        return $this->container['bytes'];
    }

    /**
    * Sets bytes
    *
    * @param double|null $bytes **参数解释**： 字节数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setBytes($bytes)
    {
        $this->container['bytes'] = $bytes;
        return $this;
    }

    /**
    * Gets dstAssociateInstanceType
    *  **参数解释**： 目的IP关联资产类型 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDstAssociateInstanceType()
    {
        return $this->container['dstAssociateInstanceType'];
    }

    /**
    * Sets dstAssociateInstanceType
    *
    * @param string|null $dstAssociateInstanceType **参数解释**： 目的IP关联资产类型 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstAssociateInstanceType($dstAssociateInstanceType)
    {
        $this->container['dstAssociateInstanceType'] = $dstAssociateInstanceType;
        return $this;
    }

    /**
    * Gets dstDeviceName
    *  **参数解释**： 目的IP关联资产名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDstDeviceName()
    {
        return $this->container['dstDeviceName'];
    }

    /**
    * Sets dstDeviceName
    *
    * @param string|null $dstDeviceName **参数解释**： 目的IP关联资产名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstDeviceName($dstDeviceName)
    {
        $this->container['dstDeviceName'] = $dstDeviceName;
        return $this;
    }

    /**
    * Gets dstIp
    *  **参数解释**： 目的IP **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDstIp()
    {
        return $this->container['dstIp'];
    }

    /**
    * Sets dstIp
    *
    * @param string|null $dstIp **参数解释**： 目的IP **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstIp($dstIp)
    {
        $this->container['dstIp'] = $dstIp;
        return $this;
    }

    /**
    * Gets dstPort
    *  **参数解释**： 目的端口 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDstPort()
    {
        return $this->container['dstPort'];
    }

    /**
    * Sets dstPort
    *
    * @param string|null $dstPort **参数解释**： 目的端口 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstPort($dstPort)
    {
        $this->container['dstPort'] = $dstPort;
        return $this;
    }

    /**
    * Gets dstHost
    *  **参数解释**： 目的域名 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDstHost()
    {
        return $this->container['dstHost'];
    }

    /**
    * Sets dstHost
    *
    * @param string|null $dstHost **参数解释**： 目的域名 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstHost($dstHost)
    {
        $this->container['dstHost'] = $dstHost;
        return $this;
    }

    /**
    * Gets dstRegionId
    *  **参数解释**： 目的regionID **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDstRegionId()
    {
        return $this->container['dstRegionId'];
    }

    /**
    * Sets dstRegionId
    *
    * @param string|null $dstRegionId **参数解释**： 目的regionID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstRegionId($dstRegionId)
    {
        $this->container['dstRegionId'] = $dstRegionId;
        return $this;
    }

    /**
    * Gets dstRegionName
    *  **参数解释**： 目的地区 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDstRegionName()
    {
        return $this->container['dstRegionName'];
    }

    /**
    * Sets dstRegionName
    *
    * @param string|null $dstRegionName **参数解释**： 目的地区 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstRegionName($dstRegionName)
    {
        $this->container['dstRegionName'] = $dstRegionName;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**： 结束时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime **参数解释**： 结束时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets protocol
    *  **参数解释**： 协议 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol **参数解释**： 协议 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets requestByte
    *  **参数解释**： 请求字节数 **取值范围**： 不涉及
    *
    * @return double|null
    */
    public function getRequestByte()
    {
        return $this->container['requestByte'];
    }

    /**
    * Sets requestByte
    *
    * @param double|null $requestByte **参数解释**： 请求字节数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRequestByte($requestByte)
    {
        $this->container['requestByte'] = $requestByte;
        return $this;
    }

    /**
    * Gets responseByte
    *  **参数解释**： 响应字节数 **取值范围**： 不涉及
    *
    * @return double|null
    */
    public function getResponseByte()
    {
        return $this->container['responseByte'];
    }

    /**
    * Sets responseByte
    *
    * @param double|null $responseByte **参数解释**： 响应字节数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setResponseByte($responseByte)
    {
        $this->container['responseByte'] = $responseByte;
        return $this;
    }

    /**
    * Gets sessions
    *  **参数解释**： 会话数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getSessions()
    {
        return $this->container['sessions'];
    }

    /**
    * Sets sessions
    *
    * @param int|null $sessions **参数解释**： 会话数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSessions($sessions)
    {
        $this->container['sessions'] = $sessions;
        return $this;
    }

    /**
    * Gets srcAssociateInstanceType
    *  **参数解释**： 源IP关联资产类型 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getSrcAssociateInstanceType()
    {
        return $this->container['srcAssociateInstanceType'];
    }

    /**
    * Sets srcAssociateInstanceType
    *
    * @param string|null $srcAssociateInstanceType **参数解释**： 源IP关联资产类型 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSrcAssociateInstanceType($srcAssociateInstanceType)
    {
        $this->container['srcAssociateInstanceType'] = $srcAssociateInstanceType;
        return $this;
    }

    /**
    * Gets srcDeviceName
    *  **参数解释**： 源IP关联资产名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getSrcDeviceName()
    {
        return $this->container['srcDeviceName'];
    }

    /**
    * Sets srcDeviceName
    *
    * @param string|null $srcDeviceName **参数解释**： 源IP关联资产名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSrcDeviceName($srcDeviceName)
    {
        $this->container['srcDeviceName'] = $srcDeviceName;
        return $this;
    }

    /**
    * Gets srcIp
    *  **参数解释**： 源IP **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getSrcIp()
    {
        return $this->container['srcIp'];
    }

    /**
    * Sets srcIp
    *
    * @param string|null $srcIp **参数解释**： 源IP **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSrcIp($srcIp)
    {
        $this->container['srcIp'] = $srcIp;
        return $this;
    }

    /**
    * Gets srcRegionId
    *  **参数解释**： 源地区 ID **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getSrcRegionId()
    {
        return $this->container['srcRegionId'];
    }

    /**
    * Sets srcRegionId
    *
    * @param string|null $srcRegionId **参数解释**： 源地区 ID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSrcRegionId($srcRegionId)
    {
        $this->container['srcRegionId'] = $srcRegionId;
        return $this;
    }

    /**
    * Gets srcRegionName
    *  **参数解释**： 源地区 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getSrcRegionName()
    {
        return $this->container['srcRegionName'];
    }

    /**
    * Sets srcRegionName
    *
    * @param string|null $srcRegionName **参数解释**： 源地区 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSrcRegionName($srcRegionName)
    {
        $this->container['srcRegionName'] = $srcRegionName;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**： 会话开始时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime **参数解释**： 会话开始时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
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

