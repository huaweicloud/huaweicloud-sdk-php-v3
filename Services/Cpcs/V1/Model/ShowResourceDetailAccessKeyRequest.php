<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowResourceDetailAccessKeyRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowResourceDetailAccessKeyRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群id，默认空字符串，默认查询所有集群
    * appId  应用id，默认空字符串，默认查询所有的应用
    * serviceType  密码服务类型，默认空字符串，默认查询所有密码服务类型
    * algorithmType  算法类型，默认空字符串，0：国密，1：国际
    * certificateType  证书类型，默认空字符串，0：根证书，1：业务证书
    * pageSize  页面大小，不超过1500
    * pageNum  页数，默认1
    * from  查询起始时间戳，毫秒级时间戳，默认为0，默认从三天前查询
    * to  查询终止时间戳，毫秒级时间戳，默认为0，默认查询到当前时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'appId' => 'string',
            'serviceType' => 'string',
            'algorithmType' => 'string',
            'certificateType' => 'string',
            'pageSize' => 'int',
            'pageNum' => 'int',
            'from' => 'int',
            'to' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群id，默认空字符串，默认查询所有集群
    * appId  应用id，默认空字符串，默认查询所有的应用
    * serviceType  密码服务类型，默认空字符串，默认查询所有密码服务类型
    * algorithmType  算法类型，默认空字符串，0：国密，1：国际
    * certificateType  证书类型，默认空字符串，0：根证书，1：业务证书
    * pageSize  页面大小，不超过1500
    * pageNum  页数，默认1
    * from  查询起始时间戳，毫秒级时间戳，默认为0，默认从三天前查询
    * to  查询终止时间戳，毫秒级时间戳，默认为0，默认查询到当前时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'appId' => null,
        'serviceType' => null,
        'algorithmType' => null,
        'certificateType' => null,
        'pageSize' => 'int32',
        'pageNum' => 'int32',
        'from' => 'int64',
        'to' => null
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
    * clusterId  集群id，默认空字符串，默认查询所有集群
    * appId  应用id，默认空字符串，默认查询所有的应用
    * serviceType  密码服务类型，默认空字符串，默认查询所有密码服务类型
    * algorithmType  算法类型，默认空字符串，0：国密，1：国际
    * certificateType  证书类型，默认空字符串，0：根证书，1：业务证书
    * pageSize  页面大小，不超过1500
    * pageNum  页数，默认1
    * from  查询起始时间戳，毫秒级时间戳，默认为0，默认从三天前查询
    * to  查询终止时间戳，毫秒级时间戳，默认为0，默认查询到当前时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'appId' => 'app_id',
            'serviceType' => 'service_type',
            'algorithmType' => 'algorithm_type',
            'certificateType' => 'certificate_type',
            'pageSize' => 'page_size',
            'pageNum' => 'page_num',
            'from' => 'from',
            'to' => 'to'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群id，默认空字符串，默认查询所有集群
    * appId  应用id，默认空字符串，默认查询所有的应用
    * serviceType  密码服务类型，默认空字符串，默认查询所有密码服务类型
    * algorithmType  算法类型，默认空字符串，0：国密，1：国际
    * certificateType  证书类型，默认空字符串，0：根证书，1：业务证书
    * pageSize  页面大小，不超过1500
    * pageNum  页数，默认1
    * from  查询起始时间戳，毫秒级时间戳，默认为0，默认从三天前查询
    * to  查询终止时间戳，毫秒级时间戳，默认为0，默认查询到当前时间
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'appId' => 'setAppId',
            'serviceType' => 'setServiceType',
            'algorithmType' => 'setAlgorithmType',
            'certificateType' => 'setCertificateType',
            'pageSize' => 'setPageSize',
            'pageNum' => 'setPageNum',
            'from' => 'setFrom',
            'to' => 'setTo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群id，默认空字符串，默认查询所有集群
    * appId  应用id，默认空字符串，默认查询所有的应用
    * serviceType  密码服务类型，默认空字符串，默认查询所有密码服务类型
    * algorithmType  算法类型，默认空字符串，0：国密，1：国际
    * certificateType  证书类型，默认空字符串，0：根证书，1：业务证书
    * pageSize  页面大小，不超过1500
    * pageNum  页数，默认1
    * from  查询起始时间戳，毫秒级时间戳，默认为0，默认从三天前查询
    * to  查询终止时间戳，毫秒级时间戳，默认为0，默认查询到当前时间
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'appId' => 'getAppId',
            'serviceType' => 'getServiceType',
            'algorithmType' => 'getAlgorithmType',
            'certificateType' => 'getCertificateType',
            'pageSize' => 'getPageSize',
            'pageNum' => 'getPageNum',
            'from' => 'getFrom',
            'to' => 'getTo'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['algorithmType'] = isset($data['algorithmType']) ? $data['algorithmType'] : null;
        $this->container['certificateType'] = isset($data['certificateType']) ? $data['certificateType'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['pageNum'] = isset($data['pageNum']) ? $data['pageNum'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
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
    * Gets clusterId
    *  集群id，默认空字符串，默认查询所有集群
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
    * @param string|null $clusterId 集群id，默认空字符串，默认查询所有集群
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets appId
    *  应用id，默认空字符串，默认查询所有的应用
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 应用id，默认空字符串，默认查询所有的应用
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets serviceType
    *  密码服务类型，默认空字符串，默认查询所有密码服务类型
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType 密码服务类型，默认空字符串，默认查询所有密码服务类型
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets algorithmType
    *  算法类型，默认空字符串，0：国密，1：国际
    *
    * @return string|null
    */
    public function getAlgorithmType()
    {
        return $this->container['algorithmType'];
    }

    /**
    * Sets algorithmType
    *
    * @param string|null $algorithmType 算法类型，默认空字符串，0：国密，1：国际
    *
    * @return $this
    */
    public function setAlgorithmType($algorithmType)
    {
        $this->container['algorithmType'] = $algorithmType;
        return $this;
    }

    /**
    * Gets certificateType
    *  证书类型，默认空字符串，0：根证书，1：业务证书
    *
    * @return string|null
    */
    public function getCertificateType()
    {
        return $this->container['certificateType'];
    }

    /**
    * Sets certificateType
    *
    * @param string|null $certificateType 证书类型，默认空字符串，0：根证书，1：业务证书
    *
    * @return $this
    */
    public function setCertificateType($certificateType)
    {
        $this->container['certificateType'] = $certificateType;
        return $this;
    }

    /**
    * Gets pageSize
    *  页面大小，不超过1500
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 页面大小，不超过1500
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets pageNum
    *  页数，默认1
    *
    * @return int|null
    */
    public function getPageNum()
    {
        return $this->container['pageNum'];
    }

    /**
    * Sets pageNum
    *
    * @param int|null $pageNum 页数，默认1
    *
    * @return $this
    */
    public function setPageNum($pageNum)
    {
        $this->container['pageNum'] = $pageNum;
        return $this;
    }

    /**
    * Gets from
    *  查询起始时间戳，毫秒级时间戳，默认为0，默认从三天前查询
    *
    * @return int|null
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param int|null $from 查询起始时间戳，毫秒级时间戳，默认为0，默认从三天前查询
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets to
    *  查询终止时间戳，毫秒级时间戳，默认为0，默认查询到当前时间
    *
    * @return string|null
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param string|null $to 查询终止时间戳，毫秒级时间戳，默认为0，默认查询到当前时间
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
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

