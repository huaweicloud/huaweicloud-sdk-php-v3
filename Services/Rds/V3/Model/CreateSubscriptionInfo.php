<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSubscriptionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSubscriptionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subscriptionDatabase  订阅数据库名。
    * subscriptionType  订阅方式，push:推送。
    * initializeAt  初始化类型：不初始化(do_not)、立即初始化(immediate)、首次同步初始化(at_first_sync)。
    * initializeInfo  initializeInfo
    * independentAgent  独立的分发代理。  true：使用。 false：不使用。
    * jobSchedule  jobSchedule
    * bakFileName  备份文件名称。若该值不为空，则订阅初始化方式为通过备份文件初始化。
    * bakBucketName  备份文件所在的obs桶名。 若bak_file_name为空，该参数无效。 若该值为空，则备份文件来源为rds的备份文件。 若该值不为空，则备份文件来源为用户obs桶。
    * publicationSubscription  publicationSubscription
    * localSubscription  localSubscription
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subscriptionDatabase' => 'string',
            'subscriptionType' => 'string',
            'initializeAt' => 'string',
            'initializeInfo' => '\HuaweiCloud\SDK\Rds\V3\Model\CreateSubscriptionInfoInitializeInfo',
            'independentAgent' => 'bool',
            'jobSchedule' => '\HuaweiCloud\SDK\Rds\V3\Model\OperateUsedJobSchedule',
            'bakFileName' => 'string',
            'bakBucketName' => 'string',
            'publicationSubscription' => '\HuaweiCloud\SDK\Rds\V3\Model\CreateSubscription4PublicationInfo',
            'localSubscription' => '\HuaweiCloud\SDK\Rds\V3\Model\CreateSubscription4InstanceInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subscriptionDatabase  订阅数据库名。
    * subscriptionType  订阅方式，push:推送。
    * initializeAt  初始化类型：不初始化(do_not)、立即初始化(immediate)、首次同步初始化(at_first_sync)。
    * initializeInfo  initializeInfo
    * independentAgent  独立的分发代理。  true：使用。 false：不使用。
    * jobSchedule  jobSchedule
    * bakFileName  备份文件名称。若该值不为空，则订阅初始化方式为通过备份文件初始化。
    * bakBucketName  备份文件所在的obs桶名。 若bak_file_name为空，该参数无效。 若该值为空，则备份文件来源为rds的备份文件。 若该值不为空，则备份文件来源为用户obs桶。
    * publicationSubscription  publicationSubscription
    * localSubscription  localSubscription
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subscriptionDatabase' => null,
        'subscriptionType' => null,
        'initializeAt' => null,
        'initializeInfo' => null,
        'independentAgent' => null,
        'jobSchedule' => null,
        'bakFileName' => null,
        'bakBucketName' => null,
        'publicationSubscription' => null,
        'localSubscription' => null
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
    * subscriptionDatabase  订阅数据库名。
    * subscriptionType  订阅方式，push:推送。
    * initializeAt  初始化类型：不初始化(do_not)、立即初始化(immediate)、首次同步初始化(at_first_sync)。
    * initializeInfo  initializeInfo
    * independentAgent  独立的分发代理。  true：使用。 false：不使用。
    * jobSchedule  jobSchedule
    * bakFileName  备份文件名称。若该值不为空，则订阅初始化方式为通过备份文件初始化。
    * bakBucketName  备份文件所在的obs桶名。 若bak_file_name为空，该参数无效。 若该值为空，则备份文件来源为rds的备份文件。 若该值不为空，则备份文件来源为用户obs桶。
    * publicationSubscription  publicationSubscription
    * localSubscription  localSubscription
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subscriptionDatabase' => 'subscription_database',
            'subscriptionType' => 'subscription_type',
            'initializeAt' => 'initialize_at',
            'initializeInfo' => 'initialize_info',
            'independentAgent' => 'independent_agent',
            'jobSchedule' => 'job_schedule',
            'bakFileName' => 'bak_file_name',
            'bakBucketName' => 'bak_bucket_name',
            'publicationSubscription' => 'publication_subscription',
            'localSubscription' => 'local_subscription'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subscriptionDatabase  订阅数据库名。
    * subscriptionType  订阅方式，push:推送。
    * initializeAt  初始化类型：不初始化(do_not)、立即初始化(immediate)、首次同步初始化(at_first_sync)。
    * initializeInfo  initializeInfo
    * independentAgent  独立的分发代理。  true：使用。 false：不使用。
    * jobSchedule  jobSchedule
    * bakFileName  备份文件名称。若该值不为空，则订阅初始化方式为通过备份文件初始化。
    * bakBucketName  备份文件所在的obs桶名。 若bak_file_name为空，该参数无效。 若该值为空，则备份文件来源为rds的备份文件。 若该值不为空，则备份文件来源为用户obs桶。
    * publicationSubscription  publicationSubscription
    * localSubscription  localSubscription
    *
    * @var string[]
    */
    protected static $setters = [
            'subscriptionDatabase' => 'setSubscriptionDatabase',
            'subscriptionType' => 'setSubscriptionType',
            'initializeAt' => 'setInitializeAt',
            'initializeInfo' => 'setInitializeInfo',
            'independentAgent' => 'setIndependentAgent',
            'jobSchedule' => 'setJobSchedule',
            'bakFileName' => 'setBakFileName',
            'bakBucketName' => 'setBakBucketName',
            'publicationSubscription' => 'setPublicationSubscription',
            'localSubscription' => 'setLocalSubscription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subscriptionDatabase  订阅数据库名。
    * subscriptionType  订阅方式，push:推送。
    * initializeAt  初始化类型：不初始化(do_not)、立即初始化(immediate)、首次同步初始化(at_first_sync)。
    * initializeInfo  initializeInfo
    * independentAgent  独立的分发代理。  true：使用。 false：不使用。
    * jobSchedule  jobSchedule
    * bakFileName  备份文件名称。若该值不为空，则订阅初始化方式为通过备份文件初始化。
    * bakBucketName  备份文件所在的obs桶名。 若bak_file_name为空，该参数无效。 若该值为空，则备份文件来源为rds的备份文件。 若该值不为空，则备份文件来源为用户obs桶。
    * publicationSubscription  publicationSubscription
    * localSubscription  localSubscription
    *
    * @var string[]
    */
    protected static $getters = [
            'subscriptionDatabase' => 'getSubscriptionDatabase',
            'subscriptionType' => 'getSubscriptionType',
            'initializeAt' => 'getInitializeAt',
            'initializeInfo' => 'getInitializeInfo',
            'independentAgent' => 'getIndependentAgent',
            'jobSchedule' => 'getJobSchedule',
            'bakFileName' => 'getBakFileName',
            'bakBucketName' => 'getBakBucketName',
            'publicationSubscription' => 'getPublicationSubscription',
            'localSubscription' => 'getLocalSubscription'
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
        $this->container['subscriptionDatabase'] = isset($data['subscriptionDatabase']) ? $data['subscriptionDatabase'] : null;
        $this->container['subscriptionType'] = isset($data['subscriptionType']) ? $data['subscriptionType'] : null;
        $this->container['initializeAt'] = isset($data['initializeAt']) ? $data['initializeAt'] : null;
        $this->container['initializeInfo'] = isset($data['initializeInfo']) ? $data['initializeInfo'] : null;
        $this->container['independentAgent'] = isset($data['independentAgent']) ? $data['independentAgent'] : null;
        $this->container['jobSchedule'] = isset($data['jobSchedule']) ? $data['jobSchedule'] : null;
        $this->container['bakFileName'] = isset($data['bakFileName']) ? $data['bakFileName'] : null;
        $this->container['bakBucketName'] = isset($data['bakBucketName']) ? $data['bakBucketName'] : null;
        $this->container['publicationSubscription'] = isset($data['publicationSubscription']) ? $data['publicationSubscription'] : null;
        $this->container['localSubscription'] = isset($data['localSubscription']) ? $data['localSubscription'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['subscriptionDatabase'] === null) {
            $invalidProperties[] = "'subscriptionDatabase' can't be null";
        }
        if ($this->container['subscriptionType'] === null) {
            $invalidProperties[] = "'subscriptionType' can't be null";
        }
        if ($this->container['initializeAt'] === null) {
            $invalidProperties[] = "'initializeAt' can't be null";
        }
        if ($this->container['jobSchedule'] === null) {
            $invalidProperties[] = "'jobSchedule' can't be null";
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
    * Gets subscriptionDatabase
    *  订阅数据库名。
    *
    * @return string
    */
    public function getSubscriptionDatabase()
    {
        return $this->container['subscriptionDatabase'];
    }

    /**
    * Sets subscriptionDatabase
    *
    * @param string $subscriptionDatabase 订阅数据库名。
    *
    * @return $this
    */
    public function setSubscriptionDatabase($subscriptionDatabase)
    {
        $this->container['subscriptionDatabase'] = $subscriptionDatabase;
        return $this;
    }

    /**
    * Gets subscriptionType
    *  订阅方式，push:推送。
    *
    * @return string
    */
    public function getSubscriptionType()
    {
        return $this->container['subscriptionType'];
    }

    /**
    * Sets subscriptionType
    *
    * @param string $subscriptionType 订阅方式，push:推送。
    *
    * @return $this
    */
    public function setSubscriptionType($subscriptionType)
    {
        $this->container['subscriptionType'] = $subscriptionType;
        return $this;
    }

    /**
    * Gets initializeAt
    *  初始化类型：不初始化(do_not)、立即初始化(immediate)、首次同步初始化(at_first_sync)。
    *
    * @return string
    */
    public function getInitializeAt()
    {
        return $this->container['initializeAt'];
    }

    /**
    * Sets initializeAt
    *
    * @param string $initializeAt 初始化类型：不初始化(do_not)、立即初始化(immediate)、首次同步初始化(at_first_sync)。
    *
    * @return $this
    */
    public function setInitializeAt($initializeAt)
    {
        $this->container['initializeAt'] = $initializeAt;
        return $this;
    }

    /**
    * Gets initializeInfo
    *  initializeInfo
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\CreateSubscriptionInfoInitializeInfo|null
    */
    public function getInitializeInfo()
    {
        return $this->container['initializeInfo'];
    }

    /**
    * Sets initializeInfo
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\CreateSubscriptionInfoInitializeInfo|null $initializeInfo initializeInfo
    *
    * @return $this
    */
    public function setInitializeInfo($initializeInfo)
    {
        $this->container['initializeInfo'] = $initializeInfo;
        return $this;
    }

    /**
    * Gets independentAgent
    *  独立的分发代理。  true：使用。 false：不使用。
    *
    * @return bool|null
    */
    public function getIndependentAgent()
    {
        return $this->container['independentAgent'];
    }

    /**
    * Sets independentAgent
    *
    * @param bool|null $independentAgent 独立的分发代理。  true：使用。 false：不使用。
    *
    * @return $this
    */
    public function setIndependentAgent($independentAgent)
    {
        $this->container['independentAgent'] = $independentAgent;
        return $this;
    }

    /**
    * Gets jobSchedule
    *  jobSchedule
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\OperateUsedJobSchedule
    */
    public function getJobSchedule()
    {
        return $this->container['jobSchedule'];
    }

    /**
    * Sets jobSchedule
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\OperateUsedJobSchedule $jobSchedule jobSchedule
    *
    * @return $this
    */
    public function setJobSchedule($jobSchedule)
    {
        $this->container['jobSchedule'] = $jobSchedule;
        return $this;
    }

    /**
    * Gets bakFileName
    *  备份文件名称。若该值不为空，则订阅初始化方式为通过备份文件初始化。
    *
    * @return string|null
    */
    public function getBakFileName()
    {
        return $this->container['bakFileName'];
    }

    /**
    * Sets bakFileName
    *
    * @param string|null $bakFileName 备份文件名称。若该值不为空，则订阅初始化方式为通过备份文件初始化。
    *
    * @return $this
    */
    public function setBakFileName($bakFileName)
    {
        $this->container['bakFileName'] = $bakFileName;
        return $this;
    }

    /**
    * Gets bakBucketName
    *  备份文件所在的obs桶名。 若bak_file_name为空，该参数无效。 若该值为空，则备份文件来源为rds的备份文件。 若该值不为空，则备份文件来源为用户obs桶。
    *
    * @return string|null
    */
    public function getBakBucketName()
    {
        return $this->container['bakBucketName'];
    }

    /**
    * Sets bakBucketName
    *
    * @param string|null $bakBucketName 备份文件所在的obs桶名。 若bak_file_name为空，该参数无效。 若该值为空，则备份文件来源为rds的备份文件。 若该值不为空，则备份文件来源为用户obs桶。
    *
    * @return $this
    */
    public function setBakBucketName($bakBucketName)
    {
        $this->container['bakBucketName'] = $bakBucketName;
        return $this;
    }

    /**
    * Gets publicationSubscription
    *  publicationSubscription
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\CreateSubscription4PublicationInfo|null
    */
    public function getPublicationSubscription()
    {
        return $this->container['publicationSubscription'];
    }

    /**
    * Sets publicationSubscription
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\CreateSubscription4PublicationInfo|null $publicationSubscription publicationSubscription
    *
    * @return $this
    */
    public function setPublicationSubscription($publicationSubscription)
    {
        $this->container['publicationSubscription'] = $publicationSubscription;
        return $this;
    }

    /**
    * Gets localSubscription
    *  localSubscription
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\CreateSubscription4InstanceInfo|null
    */
    public function getLocalSubscription()
    {
        return $this->container['localSubscription'];
    }

    /**
    * Sets localSubscription
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\CreateSubscription4InstanceInfo|null $localSubscription localSubscription
    *
    * @return $this
    */
    public function setLocalSubscription($localSubscription)
    {
        $this->container['localSubscription'] = $localSubscription;
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

