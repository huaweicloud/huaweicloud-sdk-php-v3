<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowEpsRemainingQuotaResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowEpsRemainingQuotaResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * epsQuotaRemaining  **参数解释**: 剩余企业项目配额组。
    * jobId  **参数解释**: 任务ID。 **取值范围**: 不涉及。
    * totalCount  **参数解释**: 返回的企业项目个数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'epsQuotaRemaining' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\EpsRemainingQuotaResult[]',
            'jobId' => 'string',
            'totalCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * epsQuotaRemaining  **参数解释**: 剩余企业项目配额组。
    * jobId  **参数解释**: 任务ID。 **取值范围**: 不涉及。
    * totalCount  **参数解释**: 返回的企业项目个数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'epsQuotaRemaining' => null,
        'jobId' => null,
        'totalCount' => null
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
    * epsQuotaRemaining  **参数解释**: 剩余企业项目配额组。
    * jobId  **参数解释**: 任务ID。 **取值范围**: 不涉及。
    * totalCount  **参数解释**: 返回的企业项目个数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'epsQuotaRemaining' => 'eps_quota_remaining',
            'jobId' => 'job_id',
            'totalCount' => 'total_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * epsQuotaRemaining  **参数解释**: 剩余企业项目配额组。
    * jobId  **参数解释**: 任务ID。 **取值范围**: 不涉及。
    * totalCount  **参数解释**: 返回的企业项目个数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'epsQuotaRemaining' => 'setEpsQuotaRemaining',
            'jobId' => 'setJobId',
            'totalCount' => 'setTotalCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * epsQuotaRemaining  **参数解释**: 剩余企业项目配额组。
    * jobId  **参数解释**: 任务ID。 **取值范围**: 不涉及。
    * totalCount  **参数解释**: 返回的企业项目个数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'epsQuotaRemaining' => 'getEpsQuotaRemaining',
            'jobId' => 'getJobId',
            'totalCount' => 'getTotalCount'
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
        $this->container['epsQuotaRemaining'] = isset($data['epsQuotaRemaining']) ? $data['epsQuotaRemaining'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
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
    * Gets epsQuotaRemaining
    *  **参数解释**: 剩余企业项目配额组。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\EpsRemainingQuotaResult[]|null
    */
    public function getEpsQuotaRemaining()
    {
        return $this->container['epsQuotaRemaining'];
    }

    /**
    * Sets epsQuotaRemaining
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\EpsRemainingQuotaResult[]|null $epsQuotaRemaining **参数解释**: 剩余企业项目配额组。
    *
    * @return $this
    */
    public function setEpsQuotaRemaining($epsQuotaRemaining)
    {
        $this->container['epsQuotaRemaining'] = $epsQuotaRemaining;
        return $this;
    }

    /**
    * Gets jobId
    *  **参数解释**: 任务ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId **参数解释**: 任务ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets totalCount
    *  **参数解释**: 返回的企业项目个数。 **取值范围**: 不涉及。
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
    * @param int|null $totalCount **参数解释**: 返回的企业项目个数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
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

