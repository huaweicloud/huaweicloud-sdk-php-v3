<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobBaselineInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobBaselineInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  **参数解释**： 作业ID。 **取值范围**： 长度为1~64个字符。
    * jobName  **参数解释**： 作业名称。如果作业不存在或不在当前工作空间内，则为空。 **取值范围**： 长度为1~1024个字符。
    * baselines  **参数解释**： 作业关联的基线信息列表。如果作业未关联基线，则返回空列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'jobName' => 'string',
            'baselines' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BaselineInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  **参数解释**： 作业ID。 **取值范围**： 长度为1~64个字符。
    * jobName  **参数解释**： 作业名称。如果作业不存在或不在当前工作空间内，则为空。 **取值范围**： 长度为1~1024个字符。
    * baselines  **参数解释**： 作业关联的基线信息列表。如果作业未关联基线，则返回空列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'jobName' => null,
        'baselines' => null
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
    * jobId  **参数解释**： 作业ID。 **取值范围**： 长度为1~64个字符。
    * jobName  **参数解释**： 作业名称。如果作业不存在或不在当前工作空间内，则为空。 **取值范围**： 长度为1~1024个字符。
    * baselines  **参数解释**： 作业关联的基线信息列表。如果作业未关联基线，则返回空列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'jobName' => 'job_name',
            'baselines' => 'baselines'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  **参数解释**： 作业ID。 **取值范围**： 长度为1~64个字符。
    * jobName  **参数解释**： 作业名称。如果作业不存在或不在当前工作空间内，则为空。 **取值范围**： 长度为1~1024个字符。
    * baselines  **参数解释**： 作业关联的基线信息列表。如果作业未关联基线，则返回空列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'jobName' => 'setJobName',
            'baselines' => 'setBaselines'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  **参数解释**： 作业ID。 **取值范围**： 长度为1~64个字符。
    * jobName  **参数解释**： 作业名称。如果作业不存在或不在当前工作空间内，则为空。 **取值范围**： 长度为1~1024个字符。
    * baselines  **参数解释**： 作业关联的基线信息列表。如果作业未关联基线，则返回空列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'jobName' => 'getJobName',
            'baselines' => 'getBaselines'
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
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['baselines'] = isset($data['baselines']) ? $data['baselines'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobName']) && (mb_strlen($this->container['jobName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['jobName']) && (mb_strlen($this->container['jobName']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be bigger than or equal to 1.";
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
    * Gets jobId
    *  **参数解释**： 作业ID。 **取值范围**： 长度为1~64个字符。
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
    * @param string|null $jobId **参数解释**： 作业ID。 **取值范围**： 长度为1~64个字符。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets jobName
    *  **参数解释**： 作业名称。如果作业不存在或不在当前工作空间内，则为空。 **取值范围**： 长度为1~1024个字符。
    *
    * @return string|null
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string|null $jobName **参数解释**： 作业名称。如果作业不存在或不在当前工作空间内，则为空。 **取值范围**： 长度为1~1024个字符。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets baselines
    *  **参数解释**： 作业关联的基线信息列表。如果作业未关联基线，则返回空列表。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BaselineInfo[]|null
    */
    public function getBaselines()
    {
        return $this->container['baselines'];
    }

    /**
    * Sets baselines
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BaselineInfo[]|null $baselines **参数解释**： 作业关联的基线信息列表。如果作业未关联基线，则返回空列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBaselines($baselines)
    {
        $this->container['baselines'] = $baselines;
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

