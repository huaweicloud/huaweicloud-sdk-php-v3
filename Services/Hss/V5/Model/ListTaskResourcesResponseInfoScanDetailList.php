<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTaskResourcesResponseInfoScanDetailList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTaskResourcesResponseInfo_scan_detail_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scanType  扫描项类型，包含如下   - cluster_vul：集群漏洞   - risk_assessment：风险评估   - benchmark：安全合规
    * status  扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    * failedReason  扫描失败的原因
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scanType' => 'string',
            'status' => 'string',
            'failedReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scanType  扫描项类型，包含如下   - cluster_vul：集群漏洞   - risk_assessment：风险评估   - benchmark：安全合规
    * status  扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    * failedReason  扫描失败的原因
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scanType' => null,
        'status' => null,
        'failedReason' => null
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
    * scanType  扫描项类型，包含如下   - cluster_vul：集群漏洞   - risk_assessment：风险评估   - benchmark：安全合规
    * status  扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    * failedReason  扫描失败的原因
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scanType' => 'scan_type',
            'status' => 'status',
            'failedReason' => 'failed_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scanType  扫描项类型，包含如下   - cluster_vul：集群漏洞   - risk_assessment：风险评估   - benchmark：安全合规
    * status  扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    * failedReason  扫描失败的原因
    *
    * @var string[]
    */
    protected static $setters = [
            'scanType' => 'setScanType',
            'status' => 'setStatus',
            'failedReason' => 'setFailedReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scanType  扫描项类型，包含如下   - cluster_vul：集群漏洞   - risk_assessment：风险评估   - benchmark：安全合规
    * status  扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    * failedReason  扫描失败的原因
    *
    * @var string[]
    */
    protected static $getters = [
            'scanType' => 'getScanType',
            'status' => 'getStatus',
            'failedReason' => 'getFailedReason'
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
        $this->container['scanType'] = isset($data['scanType']) ? $data['scanType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['failedReason'] = isset($data['failedReason']) ? $data['failedReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scanType']) && (mb_strlen($this->container['scanType']) > 64)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scanType']) && (mb_strlen($this->container['scanType']) < 1)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scanType']) && !preg_match("/^cluster_vul|risk_assessment|benchmark$/", $this->container['scanType'])) {
                $invalidProperties[] = "invalid value for 'scanType', must be conform to the pattern /^cluster_vul|risk_assessment|benchmark$/.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failedReason']) && (mb_strlen($this->container['failedReason']) > 32)) {
                $invalidProperties[] = "invalid value for 'failedReason', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['failedReason']) && (mb_strlen($this->container['failedReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'failedReason', the character length must be bigger than or equal to 0.";
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
    * Gets scanType
    *  扫描项类型，包含如下   - cluster_vul：集群漏洞   - risk_assessment：风险评估   - benchmark：安全合规
    *
    * @return string|null
    */
    public function getScanType()
    {
        return $this->container['scanType'];
    }

    /**
    * Sets scanType
    *
    * @param string|null $scanType 扫描项类型，包含如下   - cluster_vul：集群漏洞   - risk_assessment：风险评估   - benchmark：安全合规
    *
    * @return $this
    */
    public function setScanType($scanType)
    {
        $this->container['scanType'] = $scanType;
        return $this;
    }

    /**
    * Gets status
    *  扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 扫描状态，包含如下：   - scanning：扫描中   - success：扫描成功   - failed：扫描失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets failedReason
    *  扫描失败的原因
    *
    * @return string|null
    */
    public function getFailedReason()
    {
        return $this->container['failedReason'];
    }

    /**
    * Sets failedReason
    *
    * @param string|null $failedReason 扫描失败的原因
    *
    * @return $this
    */
    public function setFailedReason($failedReason)
    {
        $this->container['failedReason'] = $failedReason;
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

