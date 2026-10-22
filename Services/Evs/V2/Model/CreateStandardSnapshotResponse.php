<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateStandardSnapshotResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateStandardSnapshotResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  **参数解释** 任务ID。 如果需要查询job的状态，请参考：[\"[查询job的状态](https://support.huaweicloud.com/api-evs/evs_04_0054.html)\"](tag:hws)[\"[查询job的状态](https://support.huaweicloud.com/intl/zh-cn/api-evs/evs_04_0054.html)\"](tag:hws_hk)。        **取值范围**  不涉及。
    * snapshotId  **参数解释** 快照ID。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'snapshotId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  **参数解释** 任务ID。 如果需要查询job的状态，请参考：[\"[查询job的状态](https://support.huaweicloud.com/api-evs/evs_04_0054.html)\"](tag:hws)[\"[查询job的状态](https://support.huaweicloud.com/intl/zh-cn/api-evs/evs_04_0054.html)\"](tag:hws_hk)。        **取值范围**  不涉及。
    * snapshotId  **参数解释** 快照ID。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'snapshotId' => null
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
    * jobId  **参数解释** 任务ID。 如果需要查询job的状态，请参考：[\"[查询job的状态](https://support.huaweicloud.com/api-evs/evs_04_0054.html)\"](tag:hws)[\"[查询job的状态](https://support.huaweicloud.com/intl/zh-cn/api-evs/evs_04_0054.html)\"](tag:hws_hk)。        **取值范围**  不涉及。
    * snapshotId  **参数解释** 快照ID。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'snapshotId' => 'snapshot_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  **参数解释** 任务ID。 如果需要查询job的状态，请参考：[\"[查询job的状态](https://support.huaweicloud.com/api-evs/evs_04_0054.html)\"](tag:hws)[\"[查询job的状态](https://support.huaweicloud.com/intl/zh-cn/api-evs/evs_04_0054.html)\"](tag:hws_hk)。        **取值范围**  不涉及。
    * snapshotId  **参数解释** 快照ID。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'snapshotId' => 'setSnapshotId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  **参数解释** 任务ID。 如果需要查询job的状态，请参考：[\"[查询job的状态](https://support.huaweicloud.com/api-evs/evs_04_0054.html)\"](tag:hws)[\"[查询job的状态](https://support.huaweicloud.com/intl/zh-cn/api-evs/evs_04_0054.html)\"](tag:hws_hk)。        **取值范围**  不涉及。
    * snapshotId  **参数解释** 快照ID。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'snapshotId' => 'getSnapshotId'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['snapshotId'] = isset($data['snapshotId']) ? $data['snapshotId'] : null;
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
    * Gets jobId
    *  **参数解释** 任务ID。 如果需要查询job的状态，请参考：[\"[查询job的状态](https://support.huaweicloud.com/api-evs/evs_04_0054.html)\"](tag:hws)[\"[查询job的状态](https://support.huaweicloud.com/intl/zh-cn/api-evs/evs_04_0054.html)\"](tag:hws_hk)。        **取值范围**  不涉及。
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
    * @param string|null $jobId **参数解释** 任务ID。 如果需要查询job的状态，请参考：[\"[查询job的状态](https://support.huaweicloud.com/api-evs/evs_04_0054.html)\"](tag:hws)[\"[查询job的状态](https://support.huaweicloud.com/intl/zh-cn/api-evs/evs_04_0054.html)\"](tag:hws_hk)。        **取值范围**  不涉及。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets snapshotId
    *  **参数解释** 快照ID。 **取值范围** 不涉及。
    *
    * @return string|null
    */
    public function getSnapshotId()
    {
        return $this->container['snapshotId'];
    }

    /**
    * Sets snapshotId
    *
    * @param string|null $snapshotId **参数解释** 快照ID。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setSnapshotId($snapshotId)
    {
        $this->container['snapshotId'] = $snapshotId;
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

