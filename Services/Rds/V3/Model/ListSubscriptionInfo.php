<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubscriptionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubscriptionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  订阅id。
    * status  订阅状态。normal，abnormal，creating，createfail
    * publicationId  发布id。
    * publicationName  发布名称。
    * isCloud  订阅服务器来源。true：订阅服务器为云上实例, false：订阅服务器非云上实例。
    * subscriptionDatabase  目标数据库名。
    * subscriptionType  订阅方式，push:推送。
    * publicationSubscription  publicationSubscription
    * localSubscription  localSubscription
    * jobSchedule  jobSchedule
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'publicationId' => 'string',
            'publicationName' => 'string',
            'isCloud' => 'bool',
            'subscriptionDatabase' => 'string',
            'subscriptionType' => 'string',
            'publicationSubscription' => '\HuaweiCloud\SDK\Rds\V3\Model\Subscription4PublicationInfo',
            'localSubscription' => '\HuaweiCloud\SDK\Rds\V3\Model\Subscription4InstanceInfo',
            'jobSchedule' => '\HuaweiCloud\SDK\Rds\V3\Model\UsedJobSchedule'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  订阅id。
    * status  订阅状态。normal，abnormal，creating，createfail
    * publicationId  发布id。
    * publicationName  发布名称。
    * isCloud  订阅服务器来源。true：订阅服务器为云上实例, false：订阅服务器非云上实例。
    * subscriptionDatabase  目标数据库名。
    * subscriptionType  订阅方式，push:推送。
    * publicationSubscription  publicationSubscription
    * localSubscription  localSubscription
    * jobSchedule  jobSchedule
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'publicationId' => null,
        'publicationName' => null,
        'isCloud' => null,
        'subscriptionDatabase' => null,
        'subscriptionType' => null,
        'publicationSubscription' => null,
        'localSubscription' => null,
        'jobSchedule' => null
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
    * id  订阅id。
    * status  订阅状态。normal，abnormal，creating，createfail
    * publicationId  发布id。
    * publicationName  发布名称。
    * isCloud  订阅服务器来源。true：订阅服务器为云上实例, false：订阅服务器非云上实例。
    * subscriptionDatabase  目标数据库名。
    * subscriptionType  订阅方式，push:推送。
    * publicationSubscription  publicationSubscription
    * localSubscription  localSubscription
    * jobSchedule  jobSchedule
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'publicationId' => 'publication_id',
            'publicationName' => 'publication_name',
            'isCloud' => 'is_cloud',
            'subscriptionDatabase' => 'subscription_database',
            'subscriptionType' => 'subscription_type',
            'publicationSubscription' => 'publication_subscription',
            'localSubscription' => 'local_subscription',
            'jobSchedule' => 'job_schedule'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  订阅id。
    * status  订阅状态。normal，abnormal，creating，createfail
    * publicationId  发布id。
    * publicationName  发布名称。
    * isCloud  订阅服务器来源。true：订阅服务器为云上实例, false：订阅服务器非云上实例。
    * subscriptionDatabase  目标数据库名。
    * subscriptionType  订阅方式，push:推送。
    * publicationSubscription  publicationSubscription
    * localSubscription  localSubscription
    * jobSchedule  jobSchedule
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'publicationId' => 'setPublicationId',
            'publicationName' => 'setPublicationName',
            'isCloud' => 'setIsCloud',
            'subscriptionDatabase' => 'setSubscriptionDatabase',
            'subscriptionType' => 'setSubscriptionType',
            'publicationSubscription' => 'setPublicationSubscription',
            'localSubscription' => 'setLocalSubscription',
            'jobSchedule' => 'setJobSchedule'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  订阅id。
    * status  订阅状态。normal，abnormal，creating，createfail
    * publicationId  发布id。
    * publicationName  发布名称。
    * isCloud  订阅服务器来源。true：订阅服务器为云上实例, false：订阅服务器非云上实例。
    * subscriptionDatabase  目标数据库名。
    * subscriptionType  订阅方式，push:推送。
    * publicationSubscription  publicationSubscription
    * localSubscription  localSubscription
    * jobSchedule  jobSchedule
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'publicationId' => 'getPublicationId',
            'publicationName' => 'getPublicationName',
            'isCloud' => 'getIsCloud',
            'subscriptionDatabase' => 'getSubscriptionDatabase',
            'subscriptionType' => 'getSubscriptionType',
            'publicationSubscription' => 'getPublicationSubscription',
            'localSubscription' => 'getLocalSubscription',
            'jobSchedule' => 'getJobSchedule'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['publicationId'] = isset($data['publicationId']) ? $data['publicationId'] : null;
        $this->container['publicationName'] = isset($data['publicationName']) ? $data['publicationName'] : null;
        $this->container['isCloud'] = isset($data['isCloud']) ? $data['isCloud'] : null;
        $this->container['subscriptionDatabase'] = isset($data['subscriptionDatabase']) ? $data['subscriptionDatabase'] : null;
        $this->container['subscriptionType'] = isset($data['subscriptionType']) ? $data['subscriptionType'] : null;
        $this->container['publicationSubscription'] = isset($data['publicationSubscription']) ? $data['publicationSubscription'] : null;
        $this->container['localSubscription'] = isset($data['localSubscription']) ? $data['localSubscription'] : null;
        $this->container['jobSchedule'] = isset($data['jobSchedule']) ? $data['jobSchedule'] : null;
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
    * Gets id
    *  订阅id。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 订阅id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  订阅状态。normal，abnormal，creating，createfail
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
    * @param string|null $status 订阅状态。normal，abnormal，creating，createfail
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets publicationId
    *  发布id。
    *
    * @return string|null
    */
    public function getPublicationId()
    {
        return $this->container['publicationId'];
    }

    /**
    * Sets publicationId
    *
    * @param string|null $publicationId 发布id。
    *
    * @return $this
    */
    public function setPublicationId($publicationId)
    {
        $this->container['publicationId'] = $publicationId;
        return $this;
    }

    /**
    * Gets publicationName
    *  发布名称。
    *
    * @return string|null
    */
    public function getPublicationName()
    {
        return $this->container['publicationName'];
    }

    /**
    * Sets publicationName
    *
    * @param string|null $publicationName 发布名称。
    *
    * @return $this
    */
    public function setPublicationName($publicationName)
    {
        $this->container['publicationName'] = $publicationName;
        return $this;
    }

    /**
    * Gets isCloud
    *  订阅服务器来源。true：订阅服务器为云上实例, false：订阅服务器非云上实例。
    *
    * @return bool|null
    */
    public function getIsCloud()
    {
        return $this->container['isCloud'];
    }

    /**
    * Sets isCloud
    *
    * @param bool|null $isCloud 订阅服务器来源。true：订阅服务器为云上实例, false：订阅服务器非云上实例。
    *
    * @return $this
    */
    public function setIsCloud($isCloud)
    {
        $this->container['isCloud'] = $isCloud;
        return $this;
    }

    /**
    * Gets subscriptionDatabase
    *  目标数据库名。
    *
    * @return string|null
    */
    public function getSubscriptionDatabase()
    {
        return $this->container['subscriptionDatabase'];
    }

    /**
    * Sets subscriptionDatabase
    *
    * @param string|null $subscriptionDatabase 目标数据库名。
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
    * @return string|null
    */
    public function getSubscriptionType()
    {
        return $this->container['subscriptionType'];
    }

    /**
    * Sets subscriptionType
    *
    * @param string|null $subscriptionType 订阅方式，push:推送。
    *
    * @return $this
    */
    public function setSubscriptionType($subscriptionType)
    {
        $this->container['subscriptionType'] = $subscriptionType;
        return $this;
    }

    /**
    * Gets publicationSubscription
    *  publicationSubscription
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\Subscription4PublicationInfo|null
    */
    public function getPublicationSubscription()
    {
        return $this->container['publicationSubscription'];
    }

    /**
    * Sets publicationSubscription
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\Subscription4PublicationInfo|null $publicationSubscription publicationSubscription
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
    * @return \HuaweiCloud\SDK\Rds\V3\Model\Subscription4InstanceInfo|null
    */
    public function getLocalSubscription()
    {
        return $this->container['localSubscription'];
    }

    /**
    * Sets localSubscription
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\Subscription4InstanceInfo|null $localSubscription localSubscription
    *
    * @return $this
    */
    public function setLocalSubscription($localSubscription)
    {
        $this->container['localSubscription'] = $localSubscription;
        return $this;
    }

    /**
    * Gets jobSchedule
    *  jobSchedule
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\UsedJobSchedule|null
    */
    public function getJobSchedule()
    {
        return $this->container['jobSchedule'];
    }

    /**
    * Sets jobSchedule
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\UsedJobSchedule|null $jobSchedule jobSchedule
    *
    * @return $this
    */
    public function setJobSchedule($jobSchedule)
    {
        $this->container['jobSchedule'] = $jobSchedule;
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

