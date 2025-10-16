<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowResourceDetailCertificateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowResourceDetailCertificateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metricName  资源名称
    * certificateList  证书详情列表
    * totalCount  证书总数
    * expiredCount  证书过期数量
    * expiringCount  证书即将过期数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metricName' => 'string',
            'certificateList' => '\HuaweiCloud\SDK\Cpcs\V1\Model\ShowResourceDetailCertificateResponseBodyCertificateList[]',
            'totalCount' => 'int',
            'expiredCount' => 'int',
            'expiringCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metricName  资源名称
    * certificateList  证书详情列表
    * totalCount  证书总数
    * expiredCount  证书过期数量
    * expiringCount  证书即将过期数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metricName' => null,
        'certificateList' => null,
        'totalCount' => 'int32',
        'expiredCount' => 'int32',
        'expiringCount' => 'int32'
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
    * metricName  资源名称
    * certificateList  证书详情列表
    * totalCount  证书总数
    * expiredCount  证书过期数量
    * expiringCount  证书即将过期数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metricName' => 'metric_name',
            'certificateList' => 'certificate_list',
            'totalCount' => 'total_count',
            'expiredCount' => 'expired_count',
            'expiringCount' => 'expiring_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metricName  资源名称
    * certificateList  证书详情列表
    * totalCount  证书总数
    * expiredCount  证书过期数量
    * expiringCount  证书即将过期数量
    *
    * @var string[]
    */
    protected static $setters = [
            'metricName' => 'setMetricName',
            'certificateList' => 'setCertificateList',
            'totalCount' => 'setTotalCount',
            'expiredCount' => 'setExpiredCount',
            'expiringCount' => 'setExpiringCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metricName  资源名称
    * certificateList  证书详情列表
    * totalCount  证书总数
    * expiredCount  证书过期数量
    * expiringCount  证书即将过期数量
    *
    * @var string[]
    */
    protected static $getters = [
            'metricName' => 'getMetricName',
            'certificateList' => 'getCertificateList',
            'totalCount' => 'getTotalCount',
            'expiredCount' => 'getExpiredCount',
            'expiringCount' => 'getExpiringCount'
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
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['certificateList'] = isset($data['certificateList']) ? $data['certificateList'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['expiredCount'] = isset($data['expiredCount']) ? $data['expiredCount'] : null;
        $this->container['expiringCount'] = isset($data['expiringCount']) ? $data['expiringCount'] : null;
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
    * Gets metricName
    *  资源名称
    *
    * @return string|null
    */
    public function getMetricName()
    {
        return $this->container['metricName'];
    }

    /**
    * Sets metricName
    *
    * @param string|null $metricName 资源名称
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
    }

    /**
    * Gets certificateList
    *  证书详情列表
    *
    * @return \HuaweiCloud\SDK\Cpcs\V1\Model\ShowResourceDetailCertificateResponseBodyCertificateList[]|null
    */
    public function getCertificateList()
    {
        return $this->container['certificateList'];
    }

    /**
    * Sets certificateList
    *
    * @param \HuaweiCloud\SDK\Cpcs\V1\Model\ShowResourceDetailCertificateResponseBodyCertificateList[]|null $certificateList 证书详情列表
    *
    * @return $this
    */
    public function setCertificateList($certificateList)
    {
        $this->container['certificateList'] = $certificateList;
        return $this;
    }

    /**
    * Gets totalCount
    *  证书总数
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 证书总数
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets expiredCount
    *  证书过期数量
    *
    * @return int|null
    */
    public function getExpiredCount()
    {
        return $this->container['expiredCount'];
    }

    /**
    * Sets expiredCount
    *
    * @param int|null $expiredCount 证书过期数量
    *
    * @return $this
    */
    public function setExpiredCount($expiredCount)
    {
        $this->container['expiredCount'] = $expiredCount;
        return $this;
    }

    /**
    * Gets expiringCount
    *  证书即将过期数量
    *
    * @return int|null
    */
    public function getExpiringCount()
    {
        return $this->container['expiringCount'];
    }

    /**
    * Sets expiringCount
    *
    * @param int|null $expiringCount 证书即将过期数量
    *
    * @return $this
    */
    public function setExpiringCount($expiringCount)
    {
        $this->container['expiringCount'] = $expiringCount;
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

