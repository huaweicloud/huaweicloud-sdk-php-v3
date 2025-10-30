<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowImagePayPerScanStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowImagePayPerScanStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryScanNum  仓库镜像扫描成功次数
    * cicdScanNum  CICD镜像扫描成功次数
    * freeQuotaNum  免费扫描次数
    * alreadyGiven  是否赠送过免费次数
    * imageFreeQuota  登录容器镜像界面赠送的次数
    * highRisk  highRisk
    * hasRisk  hasRisk
    * total  total
    * unscan  unscan
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryScanNum' => 'int',
            'cicdScanNum' => 'int',
            'freeQuotaNum' => 'int',
            'alreadyGiven' => 'bool',
            'imageFreeQuota' => 'int',
            'highRisk' => '\HuaweiCloud\SDK\Hss\V5\Model\ImageTypeRiskInfo',
            'hasRisk' => '\HuaweiCloud\SDK\Hss\V5\Model\ImageTypeRiskInfo',
            'total' => '\HuaweiCloud\SDK\Hss\V5\Model\ImageTypeRiskInfo',
            'unscan' => '\HuaweiCloud\SDK\Hss\V5\Model\ImageTypeRiskInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryScanNum  仓库镜像扫描成功次数
    * cicdScanNum  CICD镜像扫描成功次数
    * freeQuotaNum  免费扫描次数
    * alreadyGiven  是否赠送过免费次数
    * imageFreeQuota  登录容器镜像界面赠送的次数
    * highRisk  highRisk
    * hasRisk  hasRisk
    * total  total
    * unscan  unscan
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryScanNum' => 'int32',
        'cicdScanNum' => 'int32',
        'freeQuotaNum' => 'int32',
        'alreadyGiven' => null,
        'imageFreeQuota' => 'int32',
        'highRisk' => null,
        'hasRisk' => null,
        'total' => null,
        'unscan' => null
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
    * repositoryScanNum  仓库镜像扫描成功次数
    * cicdScanNum  CICD镜像扫描成功次数
    * freeQuotaNum  免费扫描次数
    * alreadyGiven  是否赠送过免费次数
    * imageFreeQuota  登录容器镜像界面赠送的次数
    * highRisk  highRisk
    * hasRisk  hasRisk
    * total  total
    * unscan  unscan
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryScanNum' => 'repository_scan_num',
            'cicdScanNum' => 'cicd_scan_num',
            'freeQuotaNum' => 'free_quota_num',
            'alreadyGiven' => 'already_given',
            'imageFreeQuota' => 'image_free_quota',
            'highRisk' => 'high_risk',
            'hasRisk' => 'has_risk',
            'total' => 'total',
            'unscan' => 'unscan'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryScanNum  仓库镜像扫描成功次数
    * cicdScanNum  CICD镜像扫描成功次数
    * freeQuotaNum  免费扫描次数
    * alreadyGiven  是否赠送过免费次数
    * imageFreeQuota  登录容器镜像界面赠送的次数
    * highRisk  highRisk
    * hasRisk  hasRisk
    * total  total
    * unscan  unscan
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryScanNum' => 'setRepositoryScanNum',
            'cicdScanNum' => 'setCicdScanNum',
            'freeQuotaNum' => 'setFreeQuotaNum',
            'alreadyGiven' => 'setAlreadyGiven',
            'imageFreeQuota' => 'setImageFreeQuota',
            'highRisk' => 'setHighRisk',
            'hasRisk' => 'setHasRisk',
            'total' => 'setTotal',
            'unscan' => 'setUnscan'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryScanNum  仓库镜像扫描成功次数
    * cicdScanNum  CICD镜像扫描成功次数
    * freeQuotaNum  免费扫描次数
    * alreadyGiven  是否赠送过免费次数
    * imageFreeQuota  登录容器镜像界面赠送的次数
    * highRisk  highRisk
    * hasRisk  hasRisk
    * total  total
    * unscan  unscan
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryScanNum' => 'getRepositoryScanNum',
            'cicdScanNum' => 'getCicdScanNum',
            'freeQuotaNum' => 'getFreeQuotaNum',
            'alreadyGiven' => 'getAlreadyGiven',
            'imageFreeQuota' => 'getImageFreeQuota',
            'highRisk' => 'getHighRisk',
            'hasRisk' => 'getHasRisk',
            'total' => 'getTotal',
            'unscan' => 'getUnscan'
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
        $this->container['repositoryScanNum'] = isset($data['repositoryScanNum']) ? $data['repositoryScanNum'] : null;
        $this->container['cicdScanNum'] = isset($data['cicdScanNum']) ? $data['cicdScanNum'] : null;
        $this->container['freeQuotaNum'] = isset($data['freeQuotaNum']) ? $data['freeQuotaNum'] : null;
        $this->container['alreadyGiven'] = isset($data['alreadyGiven']) ? $data['alreadyGiven'] : null;
        $this->container['imageFreeQuota'] = isset($data['imageFreeQuota']) ? $data['imageFreeQuota'] : null;
        $this->container['highRisk'] = isset($data['highRisk']) ? $data['highRisk'] : null;
        $this->container['hasRisk'] = isset($data['hasRisk']) ? $data['hasRisk'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['unscan'] = isset($data['unscan']) ? $data['unscan'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['repositoryScanNum']) && ($this->container['repositoryScanNum'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'repositoryScanNum', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['repositoryScanNum']) && ($this->container['repositoryScanNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'repositoryScanNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cicdScanNum']) && ($this->container['cicdScanNum'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'cicdScanNum', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['cicdScanNum']) && ($this->container['cicdScanNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'cicdScanNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['freeQuotaNum']) && ($this->container['freeQuotaNum'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'freeQuotaNum', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['freeQuotaNum']) && ($this->container['freeQuotaNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'freeQuotaNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageFreeQuota']) && ($this->container['imageFreeQuota'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'imageFreeQuota', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['imageFreeQuota']) && ($this->container['imageFreeQuota'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageFreeQuota', must be bigger than or equal to 0.";
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
    * Gets repositoryScanNum
    *  仓库镜像扫描成功次数
    *
    * @return int|null
    */
    public function getRepositoryScanNum()
    {
        return $this->container['repositoryScanNum'];
    }

    /**
    * Sets repositoryScanNum
    *
    * @param int|null $repositoryScanNum 仓库镜像扫描成功次数
    *
    * @return $this
    */
    public function setRepositoryScanNum($repositoryScanNum)
    {
        $this->container['repositoryScanNum'] = $repositoryScanNum;
        return $this;
    }

    /**
    * Gets cicdScanNum
    *  CICD镜像扫描成功次数
    *
    * @return int|null
    */
    public function getCicdScanNum()
    {
        return $this->container['cicdScanNum'];
    }

    /**
    * Sets cicdScanNum
    *
    * @param int|null $cicdScanNum CICD镜像扫描成功次数
    *
    * @return $this
    */
    public function setCicdScanNum($cicdScanNum)
    {
        $this->container['cicdScanNum'] = $cicdScanNum;
        return $this;
    }

    /**
    * Gets freeQuotaNum
    *  免费扫描次数
    *
    * @return int|null
    */
    public function getFreeQuotaNum()
    {
        return $this->container['freeQuotaNum'];
    }

    /**
    * Sets freeQuotaNum
    *
    * @param int|null $freeQuotaNum 免费扫描次数
    *
    * @return $this
    */
    public function setFreeQuotaNum($freeQuotaNum)
    {
        $this->container['freeQuotaNum'] = $freeQuotaNum;
        return $this;
    }

    /**
    * Gets alreadyGiven
    *  是否赠送过免费次数
    *
    * @return bool|null
    */
    public function getAlreadyGiven()
    {
        return $this->container['alreadyGiven'];
    }

    /**
    * Sets alreadyGiven
    *
    * @param bool|null $alreadyGiven 是否赠送过免费次数
    *
    * @return $this
    */
    public function setAlreadyGiven($alreadyGiven)
    {
        $this->container['alreadyGiven'] = $alreadyGiven;
        return $this;
    }

    /**
    * Gets imageFreeQuota
    *  登录容器镜像界面赠送的次数
    *
    * @return int|null
    */
    public function getImageFreeQuota()
    {
        return $this->container['imageFreeQuota'];
    }

    /**
    * Sets imageFreeQuota
    *
    * @param int|null $imageFreeQuota 登录容器镜像界面赠送的次数
    *
    * @return $this
    */
    public function setImageFreeQuota($imageFreeQuota)
    {
        $this->container['imageFreeQuota'] = $imageFreeQuota;
        return $this;
    }

    /**
    * Gets highRisk
    *  highRisk
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ImageTypeRiskInfo|null
    */
    public function getHighRisk()
    {
        return $this->container['highRisk'];
    }

    /**
    * Sets highRisk
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ImageTypeRiskInfo|null $highRisk highRisk
    *
    * @return $this
    */
    public function setHighRisk($highRisk)
    {
        $this->container['highRisk'] = $highRisk;
        return $this;
    }

    /**
    * Gets hasRisk
    *  hasRisk
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ImageTypeRiskInfo|null
    */
    public function getHasRisk()
    {
        return $this->container['hasRisk'];
    }

    /**
    * Sets hasRisk
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ImageTypeRiskInfo|null $hasRisk hasRisk
    *
    * @return $this
    */
    public function setHasRisk($hasRisk)
    {
        $this->container['hasRisk'] = $hasRisk;
        return $this;
    }

    /**
    * Gets total
    *  total
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ImageTypeRiskInfo|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ImageTypeRiskInfo|null $total total
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets unscan
    *  unscan
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ImageTypeRiskInfo|null
    */
    public function getUnscan()
    {
        return $this->container['unscan'];
    }

    /**
    * Sets unscan
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ImageTypeRiskInfo|null $unscan unscan
    *
    * @return $this
    */
    public function setUnscan($unscan)
    {
        $this->container['unscan'] = $unscan;
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

