<?php

namespace HuaweiCloud\SDK\Ccm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowConsoleConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowConsoleConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isSupportEps  是否支持企业项目。
    * isSupportSm2  是否支持SM2算法。
    * isSupportDhsm  是否支持专属加密集群。
    * dhsmRegions  专属加密集群支持的region列表。
    * isSupportYearlyMonthlyCa  是否支持包年包月CA。
    * isSupportIam5  是否支持IAM5鉴权。
    * isSupportOcsp  是否支持OCSP查询。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSupportEps' => 'bool',
            'isSupportSm2' => 'bool',
            'isSupportDhsm' => 'bool',
            'dhsmRegions' => 'string[]',
            'isSupportYearlyMonthlyCa' => 'bool',
            'isSupportIam5' => 'bool',
            'isSupportOcsp' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSupportEps  是否支持企业项目。
    * isSupportSm2  是否支持SM2算法。
    * isSupportDhsm  是否支持专属加密集群。
    * dhsmRegions  专属加密集群支持的region列表。
    * isSupportYearlyMonthlyCa  是否支持包年包月CA。
    * isSupportIam5  是否支持IAM5鉴权。
    * isSupportOcsp  是否支持OCSP查询。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSupportEps' => null,
        'isSupportSm2' => null,
        'isSupportDhsm' => null,
        'dhsmRegions' => null,
        'isSupportYearlyMonthlyCa' => null,
        'isSupportIam5' => null,
        'isSupportOcsp' => null
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
    * isSupportEps  是否支持企业项目。
    * isSupportSm2  是否支持SM2算法。
    * isSupportDhsm  是否支持专属加密集群。
    * dhsmRegions  专属加密集群支持的region列表。
    * isSupportYearlyMonthlyCa  是否支持包年包月CA。
    * isSupportIam5  是否支持IAM5鉴权。
    * isSupportOcsp  是否支持OCSP查询。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSupportEps' => 'is_support_eps',
            'isSupportSm2' => 'is_support_sm2',
            'isSupportDhsm' => 'is_support_dhsm',
            'dhsmRegions' => 'dhsm_regions',
            'isSupportYearlyMonthlyCa' => 'is_support_yearly_monthly_ca',
            'isSupportIam5' => 'is_support_iam5',
            'isSupportOcsp' => 'is_support_ocsp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSupportEps  是否支持企业项目。
    * isSupportSm2  是否支持SM2算法。
    * isSupportDhsm  是否支持专属加密集群。
    * dhsmRegions  专属加密集群支持的region列表。
    * isSupportYearlyMonthlyCa  是否支持包年包月CA。
    * isSupportIam5  是否支持IAM5鉴权。
    * isSupportOcsp  是否支持OCSP查询。
    *
    * @var string[]
    */
    protected static $setters = [
            'isSupportEps' => 'setIsSupportEps',
            'isSupportSm2' => 'setIsSupportSm2',
            'isSupportDhsm' => 'setIsSupportDhsm',
            'dhsmRegions' => 'setDhsmRegions',
            'isSupportYearlyMonthlyCa' => 'setIsSupportYearlyMonthlyCa',
            'isSupportIam5' => 'setIsSupportIam5',
            'isSupportOcsp' => 'setIsSupportOcsp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSupportEps  是否支持企业项目。
    * isSupportSm2  是否支持SM2算法。
    * isSupportDhsm  是否支持专属加密集群。
    * dhsmRegions  专属加密集群支持的region列表。
    * isSupportYearlyMonthlyCa  是否支持包年包月CA。
    * isSupportIam5  是否支持IAM5鉴权。
    * isSupportOcsp  是否支持OCSP查询。
    *
    * @var string[]
    */
    protected static $getters = [
            'isSupportEps' => 'getIsSupportEps',
            'isSupportSm2' => 'getIsSupportSm2',
            'isSupportDhsm' => 'getIsSupportDhsm',
            'dhsmRegions' => 'getDhsmRegions',
            'isSupportYearlyMonthlyCa' => 'getIsSupportYearlyMonthlyCa',
            'isSupportIam5' => 'getIsSupportIam5',
            'isSupportOcsp' => 'getIsSupportOcsp'
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
        $this->container['isSupportEps'] = isset($data['isSupportEps']) ? $data['isSupportEps'] : null;
        $this->container['isSupportSm2'] = isset($data['isSupportSm2']) ? $data['isSupportSm2'] : null;
        $this->container['isSupportDhsm'] = isset($data['isSupportDhsm']) ? $data['isSupportDhsm'] : null;
        $this->container['dhsmRegions'] = isset($data['dhsmRegions']) ? $data['dhsmRegions'] : null;
        $this->container['isSupportYearlyMonthlyCa'] = isset($data['isSupportYearlyMonthlyCa']) ? $data['isSupportYearlyMonthlyCa'] : null;
        $this->container['isSupportIam5'] = isset($data['isSupportIam5']) ? $data['isSupportIam5'] : null;
        $this->container['isSupportOcsp'] = isset($data['isSupportOcsp']) ? $data['isSupportOcsp'] : null;
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
    * Gets isSupportEps
    *  是否支持企业项目。
    *
    * @return bool|null
    */
    public function getIsSupportEps()
    {
        return $this->container['isSupportEps'];
    }

    /**
    * Sets isSupportEps
    *
    * @param bool|null $isSupportEps 是否支持企业项目。
    *
    * @return $this
    */
    public function setIsSupportEps($isSupportEps)
    {
        $this->container['isSupportEps'] = $isSupportEps;
        return $this;
    }

    /**
    * Gets isSupportSm2
    *  是否支持SM2算法。
    *
    * @return bool|null
    */
    public function getIsSupportSm2()
    {
        return $this->container['isSupportSm2'];
    }

    /**
    * Sets isSupportSm2
    *
    * @param bool|null $isSupportSm2 是否支持SM2算法。
    *
    * @return $this
    */
    public function setIsSupportSm2($isSupportSm2)
    {
        $this->container['isSupportSm2'] = $isSupportSm2;
        return $this;
    }

    /**
    * Gets isSupportDhsm
    *  是否支持专属加密集群。
    *
    * @return bool|null
    */
    public function getIsSupportDhsm()
    {
        return $this->container['isSupportDhsm'];
    }

    /**
    * Sets isSupportDhsm
    *
    * @param bool|null $isSupportDhsm 是否支持专属加密集群。
    *
    * @return $this
    */
    public function setIsSupportDhsm($isSupportDhsm)
    {
        $this->container['isSupportDhsm'] = $isSupportDhsm;
        return $this;
    }

    /**
    * Gets dhsmRegions
    *  专属加密集群支持的region列表。
    *
    * @return string[]|null
    */
    public function getDhsmRegions()
    {
        return $this->container['dhsmRegions'];
    }

    /**
    * Sets dhsmRegions
    *
    * @param string[]|null $dhsmRegions 专属加密集群支持的region列表。
    *
    * @return $this
    */
    public function setDhsmRegions($dhsmRegions)
    {
        $this->container['dhsmRegions'] = $dhsmRegions;
        return $this;
    }

    /**
    * Gets isSupportYearlyMonthlyCa
    *  是否支持包年包月CA。
    *
    * @return bool|null
    */
    public function getIsSupportYearlyMonthlyCa()
    {
        return $this->container['isSupportYearlyMonthlyCa'];
    }

    /**
    * Sets isSupportYearlyMonthlyCa
    *
    * @param bool|null $isSupportYearlyMonthlyCa 是否支持包年包月CA。
    *
    * @return $this
    */
    public function setIsSupportYearlyMonthlyCa($isSupportYearlyMonthlyCa)
    {
        $this->container['isSupportYearlyMonthlyCa'] = $isSupportYearlyMonthlyCa;
        return $this;
    }

    /**
    * Gets isSupportIam5
    *  是否支持IAM5鉴权。
    *
    * @return bool|null
    */
    public function getIsSupportIam5()
    {
        return $this->container['isSupportIam5'];
    }

    /**
    * Sets isSupportIam5
    *
    * @param bool|null $isSupportIam5 是否支持IAM5鉴权。
    *
    * @return $this
    */
    public function setIsSupportIam5($isSupportIam5)
    {
        $this->container['isSupportIam5'] = $isSupportIam5;
        return $this;
    }

    /**
    * Gets isSupportOcsp
    *  是否支持OCSP查询。
    *
    * @return bool|null
    */
    public function getIsSupportOcsp()
    {
        return $this->container['isSupportOcsp'];
    }

    /**
    * Sets isSupportOcsp
    *
    * @param bool|null $isSupportOcsp 是否支持OCSP查询。
    *
    * @return $this
    */
    public function setIsSupportOcsp($isSupportOcsp)
    {
        $this->container['isSupportOcsp'] = $isSupportOcsp;
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

