<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowUserReviewAttachmentUploadingAddressRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowUserReviewAttachmentUploadingAddressRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务id
    * startNumber  起始序号
    * endNumber  结束序号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'startNumber' => 'int',
            'endNumber' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务id
    * startNumber  起始序号
    * endNumber  结束序号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'startNumber' => null,
        'endNumber' => null
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
    * jobId  任务id
    * startNumber  起始序号
    * endNumber  结束序号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'startNumber' => 'start_number',
            'endNumber' => 'end_number'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务id
    * startNumber  起始序号
    * endNumber  结束序号
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'startNumber' => 'setStartNumber',
            'endNumber' => 'setEndNumber'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务id
    * startNumber  起始序号
    * endNumber  结束序号
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'startNumber' => 'getStartNumber',
            'endNumber' => 'getEndNumber'
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
        $this->container['startNumber'] = isset($data['startNumber']) ? $data['startNumber'] : null;
        $this->container['endNumber'] = isset($data['endNumber']) ? $data['endNumber'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
            if ((mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startNumber']) && ($this->container['startNumber'] > 99)) {
                $invalidProperties[] = "invalid value for 'startNumber', must be smaller than or equal to 99.";
            }
            if (!is_null($this->container['startNumber']) && ($this->container['startNumber'] < 0)) {
                $invalidProperties[] = "invalid value for 'startNumber', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endNumber']) && ($this->container['endNumber'] > 100)) {
                $invalidProperties[] = "invalid value for 'endNumber', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['endNumber']) && ($this->container['endNumber'] < 1)) {
                $invalidProperties[] = "invalid value for 'endNumber', must be bigger than or equal to 1.";
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
    *  任务id
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 任务id
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets startNumber
    *  起始序号
    *
    * @return int|null
    */
    public function getStartNumber()
    {
        return $this->container['startNumber'];
    }

    /**
    * Sets startNumber
    *
    * @param int|null $startNumber 起始序号
    *
    * @return $this
    */
    public function setStartNumber($startNumber)
    {
        $this->container['startNumber'] = $startNumber;
        return $this;
    }

    /**
    * Gets endNumber
    *  结束序号
    *
    * @return int|null
    */
    public function getEndNumber()
    {
        return $this->container['endNumber'];
    }

    /**
    * Sets endNumber
    *
    * @param int|null $endNumber 结束序号
    *
    * @return $this
    */
    public function setEndNumber($endNumber)
    {
        $this->container['endNumber'] = $endNumber;
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

