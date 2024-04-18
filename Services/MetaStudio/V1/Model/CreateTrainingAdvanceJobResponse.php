<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTrainingAdvanceJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTrainingAdvanceJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务id。
    * trainingDataUploadingUrl  上传训练数据的地址。训练数据需打包成zip文件后，上传至该url。  create_type取值为package时设置。 > 通过该obs地址上传时，需设置content-type为application/zip。
    * segmentUploadingUrl  segmentUploadingUrl
    * authorizationLetterUploadingUrl  授权书的上传地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'trainingDataUploadingUrl' => 'string',
            'segmentUploadingUrl' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTrainingJobRspSegmentUploadingUrl',
            'authorizationLetterUploadingUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务id。
    * trainingDataUploadingUrl  上传训练数据的地址。训练数据需打包成zip文件后，上传至该url。  create_type取值为package时设置。 > 通过该obs地址上传时，需设置content-type为application/zip。
    * segmentUploadingUrl  segmentUploadingUrl
    * authorizationLetterUploadingUrl  授权书的上传地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'trainingDataUploadingUrl' => null,
        'segmentUploadingUrl' => null,
        'authorizationLetterUploadingUrl' => null
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
    * jobId  任务id。
    * trainingDataUploadingUrl  上传训练数据的地址。训练数据需打包成zip文件后，上传至该url。  create_type取值为package时设置。 > 通过该obs地址上传时，需设置content-type为application/zip。
    * segmentUploadingUrl  segmentUploadingUrl
    * authorizationLetterUploadingUrl  授权书的上传地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'trainingDataUploadingUrl' => 'training_data_uploading_url',
            'segmentUploadingUrl' => 'segment_uploading_url',
            'authorizationLetterUploadingUrl' => 'authorization_letter_uploading_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务id。
    * trainingDataUploadingUrl  上传训练数据的地址。训练数据需打包成zip文件后，上传至该url。  create_type取值为package时设置。 > 通过该obs地址上传时，需设置content-type为application/zip。
    * segmentUploadingUrl  segmentUploadingUrl
    * authorizationLetterUploadingUrl  授权书的上传地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'trainingDataUploadingUrl' => 'setTrainingDataUploadingUrl',
            'segmentUploadingUrl' => 'setSegmentUploadingUrl',
            'authorizationLetterUploadingUrl' => 'setAuthorizationLetterUploadingUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务id。
    * trainingDataUploadingUrl  上传训练数据的地址。训练数据需打包成zip文件后，上传至该url。  create_type取值为package时设置。 > 通过该obs地址上传时，需设置content-type为application/zip。
    * segmentUploadingUrl  segmentUploadingUrl
    * authorizationLetterUploadingUrl  授权书的上传地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'trainingDataUploadingUrl' => 'getTrainingDataUploadingUrl',
            'segmentUploadingUrl' => 'getSegmentUploadingUrl',
            'authorizationLetterUploadingUrl' => 'getAuthorizationLetterUploadingUrl'
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
        $this->container['trainingDataUploadingUrl'] = isset($data['trainingDataUploadingUrl']) ? $data['trainingDataUploadingUrl'] : null;
        $this->container['segmentUploadingUrl'] = isset($data['segmentUploadingUrl']) ? $data['segmentUploadingUrl'] : null;
        $this->container['authorizationLetterUploadingUrl'] = isset($data['authorizationLetterUploadingUrl']) ? $data['authorizationLetterUploadingUrl'] : null;
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
            if (!is_null($this->container['trainingDataUploadingUrl']) && (mb_strlen($this->container['trainingDataUploadingUrl']) > 4096)) {
                $invalidProperties[] = "invalid value for 'trainingDataUploadingUrl', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['trainingDataUploadingUrl']) && (mb_strlen($this->container['trainingDataUploadingUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'trainingDataUploadingUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['authorizationLetterUploadingUrl']) && (mb_strlen($this->container['authorizationLetterUploadingUrl']) > 4096)) {
                $invalidProperties[] = "invalid value for 'authorizationLetterUploadingUrl', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['authorizationLetterUploadingUrl']) && (mb_strlen($this->container['authorizationLetterUploadingUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorizationLetterUploadingUrl', the character length must be bigger than or equal to 1.";
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
    *  任务id。
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
    * @param string|null $jobId 任务id。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets trainingDataUploadingUrl
    *  上传训练数据的地址。训练数据需打包成zip文件后，上传至该url。  create_type取值为package时设置。 > 通过该obs地址上传时，需设置content-type为application/zip。
    *
    * @return string|null
    */
    public function getTrainingDataUploadingUrl()
    {
        return $this->container['trainingDataUploadingUrl'];
    }

    /**
    * Sets trainingDataUploadingUrl
    *
    * @param string|null $trainingDataUploadingUrl 上传训练数据的地址。训练数据需打包成zip文件后，上传至该url。  create_type取值为package时设置。 > 通过该obs地址上传时，需设置content-type为application/zip。
    *
    * @return $this
    */
    public function setTrainingDataUploadingUrl($trainingDataUploadingUrl)
    {
        $this->container['trainingDataUploadingUrl'] = $trainingDataUploadingUrl;
        return $this;
    }

    /**
    * Gets segmentUploadingUrl
    *  segmentUploadingUrl
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTrainingJobRspSegmentUploadingUrl|null
    */
    public function getSegmentUploadingUrl()
    {
        return $this->container['segmentUploadingUrl'];
    }

    /**
    * Sets segmentUploadingUrl
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\CreateTrainingJobRspSegmentUploadingUrl|null $segmentUploadingUrl segmentUploadingUrl
    *
    * @return $this
    */
    public function setSegmentUploadingUrl($segmentUploadingUrl)
    {
        $this->container['segmentUploadingUrl'] = $segmentUploadingUrl;
        return $this;
    }

    /**
    * Gets authorizationLetterUploadingUrl
    *  授权书的上传地址。
    *
    * @return string|null
    */
    public function getAuthorizationLetterUploadingUrl()
    {
        return $this->container['authorizationLetterUploadingUrl'];
    }

    /**
    * Sets authorizationLetterUploadingUrl
    *
    * @param string|null $authorizationLetterUploadingUrl 授权书的上传地址。
    *
    * @return $this
    */
    public function setAuthorizationLetterUploadingUrl($authorizationLetterUploadingUrl)
    {
        $this->container['authorizationLetterUploadingUrl'] = $authorizationLetterUploadingUrl;
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

