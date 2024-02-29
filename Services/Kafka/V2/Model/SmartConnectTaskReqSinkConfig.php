<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmartConnectTaskReqSinkConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmartConnectTaskReqSinkConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * redisAddress  Redis实例地址。（仅目标端类型为Redis时需要填写）
    * redisType  Redis实例类型。（仅目标端类型为Redis时需要填写）
    * dcsInstanceId  DCS实例ID。（仅目标端类型为Redis时需要填写）
    * redisPassword  Redis密码。（仅目标端类型为Redis时需要填写）
    * consumerStrategy  转储启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅目标端类型为OBS时需要填写）
    * destinationFileType  转储文件格式。当前只支持TEXT。（仅目标端类型为OBS时需要填写）
    * deliverTimeInterval  数据转储周期（秒），默认配置为300秒。（仅目标端类型为OBS时需要填写）
    * accessKey  AK，访问密钥ID。（仅目标端类型为OBS时需要填写）
    * secretKey  SK，与访问密钥ID结合使用的密钥。（仅目标端类型为OBS时需要填写）
    * obsBucketName  转储地址，即存储Topic数据的OBS桶的名称。（仅目标端类型为OBS时需要填写）
    * obsPath  转储目录，即OBS中存储Topic的目录，多级目录可以用“/”进行分隔。（仅目标端类型为OBS时需要填写）
    * partitionFormat  时间目录格式。（仅目标端类型为OBS时需要填写）   - yyyy：年   - yyyy/MM：年/月   - yyyy/MM/dd：年/月/日   - yyyy/MM/dd/HH：年/月/日/时   - yyyy/MM/dd/HH/mm：年/月/日/时/分
    * recordDelimiter  记录分行符，用于分隔写入转储文件的用户数据。（仅目标端类型为OBS时需要填写）   取值范围：   - 逗号“,”   - 分号“;”   - 竖线“|”   - 换行符“\\n”   - NULL
    * storeKeys  是否转储Key，开启表示转储Key，关闭表示不转储Key。（仅目标端类型为OBS时需要填写）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'redisAddress' => 'string',
            'redisType' => 'string',
            'dcsInstanceId' => 'string',
            'redisPassword' => 'string',
            'consumerStrategy' => 'string',
            'destinationFileType' => 'string',
            'deliverTimeInterval' => 'int',
            'accessKey' => 'string',
            'secretKey' => 'string',
            'obsBucketName' => 'string',
            'obsPath' => 'string',
            'partitionFormat' => 'string',
            'recordDelimiter' => 'string',
            'storeKeys' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * redisAddress  Redis实例地址。（仅目标端类型为Redis时需要填写）
    * redisType  Redis实例类型。（仅目标端类型为Redis时需要填写）
    * dcsInstanceId  DCS实例ID。（仅目标端类型为Redis时需要填写）
    * redisPassword  Redis密码。（仅目标端类型为Redis时需要填写）
    * consumerStrategy  转储启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅目标端类型为OBS时需要填写）
    * destinationFileType  转储文件格式。当前只支持TEXT。（仅目标端类型为OBS时需要填写）
    * deliverTimeInterval  数据转储周期（秒），默认配置为300秒。（仅目标端类型为OBS时需要填写）
    * accessKey  AK，访问密钥ID。（仅目标端类型为OBS时需要填写）
    * secretKey  SK，与访问密钥ID结合使用的密钥。（仅目标端类型为OBS时需要填写）
    * obsBucketName  转储地址，即存储Topic数据的OBS桶的名称。（仅目标端类型为OBS时需要填写）
    * obsPath  转储目录，即OBS中存储Topic的目录，多级目录可以用“/”进行分隔。（仅目标端类型为OBS时需要填写）
    * partitionFormat  时间目录格式。（仅目标端类型为OBS时需要填写）   - yyyy：年   - yyyy/MM：年/月   - yyyy/MM/dd：年/月/日   - yyyy/MM/dd/HH：年/月/日/时   - yyyy/MM/dd/HH/mm：年/月/日/时/分
    * recordDelimiter  记录分行符，用于分隔写入转储文件的用户数据。（仅目标端类型为OBS时需要填写）   取值范围：   - 逗号“,”   - 分号“;”   - 竖线“|”   - 换行符“\\n”   - NULL
    * storeKeys  是否转储Key，开启表示转储Key，关闭表示不转储Key。（仅目标端类型为OBS时需要填写）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'redisAddress' => null,
        'redisType' => null,
        'dcsInstanceId' => null,
        'redisPassword' => null,
        'consumerStrategy' => null,
        'destinationFileType' => null,
        'deliverTimeInterval' => null,
        'accessKey' => null,
        'secretKey' => null,
        'obsBucketName' => null,
        'obsPath' => null,
        'partitionFormat' => null,
        'recordDelimiter' => null,
        'storeKeys' => null
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
    * redisAddress  Redis实例地址。（仅目标端类型为Redis时需要填写）
    * redisType  Redis实例类型。（仅目标端类型为Redis时需要填写）
    * dcsInstanceId  DCS实例ID。（仅目标端类型为Redis时需要填写）
    * redisPassword  Redis密码。（仅目标端类型为Redis时需要填写）
    * consumerStrategy  转储启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅目标端类型为OBS时需要填写）
    * destinationFileType  转储文件格式。当前只支持TEXT。（仅目标端类型为OBS时需要填写）
    * deliverTimeInterval  数据转储周期（秒），默认配置为300秒。（仅目标端类型为OBS时需要填写）
    * accessKey  AK，访问密钥ID。（仅目标端类型为OBS时需要填写）
    * secretKey  SK，与访问密钥ID结合使用的密钥。（仅目标端类型为OBS时需要填写）
    * obsBucketName  转储地址，即存储Topic数据的OBS桶的名称。（仅目标端类型为OBS时需要填写）
    * obsPath  转储目录，即OBS中存储Topic的目录，多级目录可以用“/”进行分隔。（仅目标端类型为OBS时需要填写）
    * partitionFormat  时间目录格式。（仅目标端类型为OBS时需要填写）   - yyyy：年   - yyyy/MM：年/月   - yyyy/MM/dd：年/月/日   - yyyy/MM/dd/HH：年/月/日/时   - yyyy/MM/dd/HH/mm：年/月/日/时/分
    * recordDelimiter  记录分行符，用于分隔写入转储文件的用户数据。（仅目标端类型为OBS时需要填写）   取值范围：   - 逗号“,”   - 分号“;”   - 竖线“|”   - 换行符“\\n”   - NULL
    * storeKeys  是否转储Key，开启表示转储Key，关闭表示不转储Key。（仅目标端类型为OBS时需要填写）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'redisAddress' => 'redis_address',
            'redisType' => 'redis_type',
            'dcsInstanceId' => 'dcs_instance_id',
            'redisPassword' => 'redis_password',
            'consumerStrategy' => 'consumer_strategy',
            'destinationFileType' => 'destination_file_type',
            'deliverTimeInterval' => 'deliver_time_interval',
            'accessKey' => 'access_key',
            'secretKey' => 'secret_key',
            'obsBucketName' => 'obs_bucket_name',
            'obsPath' => 'obs_path',
            'partitionFormat' => 'partition_format',
            'recordDelimiter' => 'record_delimiter',
            'storeKeys' => 'store_keys'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * redisAddress  Redis实例地址。（仅目标端类型为Redis时需要填写）
    * redisType  Redis实例类型。（仅目标端类型为Redis时需要填写）
    * dcsInstanceId  DCS实例ID。（仅目标端类型为Redis时需要填写）
    * redisPassword  Redis密码。（仅目标端类型为Redis时需要填写）
    * consumerStrategy  转储启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅目标端类型为OBS时需要填写）
    * destinationFileType  转储文件格式。当前只支持TEXT。（仅目标端类型为OBS时需要填写）
    * deliverTimeInterval  数据转储周期（秒），默认配置为300秒。（仅目标端类型为OBS时需要填写）
    * accessKey  AK，访问密钥ID。（仅目标端类型为OBS时需要填写）
    * secretKey  SK，与访问密钥ID结合使用的密钥。（仅目标端类型为OBS时需要填写）
    * obsBucketName  转储地址，即存储Topic数据的OBS桶的名称。（仅目标端类型为OBS时需要填写）
    * obsPath  转储目录，即OBS中存储Topic的目录，多级目录可以用“/”进行分隔。（仅目标端类型为OBS时需要填写）
    * partitionFormat  时间目录格式。（仅目标端类型为OBS时需要填写）   - yyyy：年   - yyyy/MM：年/月   - yyyy/MM/dd：年/月/日   - yyyy/MM/dd/HH：年/月/日/时   - yyyy/MM/dd/HH/mm：年/月/日/时/分
    * recordDelimiter  记录分行符，用于分隔写入转储文件的用户数据。（仅目标端类型为OBS时需要填写）   取值范围：   - 逗号“,”   - 分号“;”   - 竖线“|”   - 换行符“\\n”   - NULL
    * storeKeys  是否转储Key，开启表示转储Key，关闭表示不转储Key。（仅目标端类型为OBS时需要填写）
    *
    * @var string[]
    */
    protected static $setters = [
            'redisAddress' => 'setRedisAddress',
            'redisType' => 'setRedisType',
            'dcsInstanceId' => 'setDcsInstanceId',
            'redisPassword' => 'setRedisPassword',
            'consumerStrategy' => 'setConsumerStrategy',
            'destinationFileType' => 'setDestinationFileType',
            'deliverTimeInterval' => 'setDeliverTimeInterval',
            'accessKey' => 'setAccessKey',
            'secretKey' => 'setSecretKey',
            'obsBucketName' => 'setObsBucketName',
            'obsPath' => 'setObsPath',
            'partitionFormat' => 'setPartitionFormat',
            'recordDelimiter' => 'setRecordDelimiter',
            'storeKeys' => 'setStoreKeys'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * redisAddress  Redis实例地址。（仅目标端类型为Redis时需要填写）
    * redisType  Redis实例类型。（仅目标端类型为Redis时需要填写）
    * dcsInstanceId  DCS实例ID。（仅目标端类型为Redis时需要填写）
    * redisPassword  Redis密码。（仅目标端类型为Redis时需要填写）
    * consumerStrategy  转储启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅目标端类型为OBS时需要填写）
    * destinationFileType  转储文件格式。当前只支持TEXT。（仅目标端类型为OBS时需要填写）
    * deliverTimeInterval  数据转储周期（秒），默认配置为300秒。（仅目标端类型为OBS时需要填写）
    * accessKey  AK，访问密钥ID。（仅目标端类型为OBS时需要填写）
    * secretKey  SK，与访问密钥ID结合使用的密钥。（仅目标端类型为OBS时需要填写）
    * obsBucketName  转储地址，即存储Topic数据的OBS桶的名称。（仅目标端类型为OBS时需要填写）
    * obsPath  转储目录，即OBS中存储Topic的目录，多级目录可以用“/”进行分隔。（仅目标端类型为OBS时需要填写）
    * partitionFormat  时间目录格式。（仅目标端类型为OBS时需要填写）   - yyyy：年   - yyyy/MM：年/月   - yyyy/MM/dd：年/月/日   - yyyy/MM/dd/HH：年/月/日/时   - yyyy/MM/dd/HH/mm：年/月/日/时/分
    * recordDelimiter  记录分行符，用于分隔写入转储文件的用户数据。（仅目标端类型为OBS时需要填写）   取值范围：   - 逗号“,”   - 分号“;”   - 竖线“|”   - 换行符“\\n”   - NULL
    * storeKeys  是否转储Key，开启表示转储Key，关闭表示不转储Key。（仅目标端类型为OBS时需要填写）
    *
    * @var string[]
    */
    protected static $getters = [
            'redisAddress' => 'getRedisAddress',
            'redisType' => 'getRedisType',
            'dcsInstanceId' => 'getDcsInstanceId',
            'redisPassword' => 'getRedisPassword',
            'consumerStrategy' => 'getConsumerStrategy',
            'destinationFileType' => 'getDestinationFileType',
            'deliverTimeInterval' => 'getDeliverTimeInterval',
            'accessKey' => 'getAccessKey',
            'secretKey' => 'getSecretKey',
            'obsBucketName' => 'getObsBucketName',
            'obsPath' => 'getObsPath',
            'partitionFormat' => 'getPartitionFormat',
            'recordDelimiter' => 'getRecordDelimiter',
            'storeKeys' => 'getStoreKeys'
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
        $this->container['redisAddress'] = isset($data['redisAddress']) ? $data['redisAddress'] : null;
        $this->container['redisType'] = isset($data['redisType']) ? $data['redisType'] : null;
        $this->container['dcsInstanceId'] = isset($data['dcsInstanceId']) ? $data['dcsInstanceId'] : null;
        $this->container['redisPassword'] = isset($data['redisPassword']) ? $data['redisPassword'] : null;
        $this->container['consumerStrategy'] = isset($data['consumerStrategy']) ? $data['consumerStrategy'] : null;
        $this->container['destinationFileType'] = isset($data['destinationFileType']) ? $data['destinationFileType'] : null;
        $this->container['deliverTimeInterval'] = isset($data['deliverTimeInterval']) ? $data['deliverTimeInterval'] : null;
        $this->container['accessKey'] = isset($data['accessKey']) ? $data['accessKey'] : null;
        $this->container['secretKey'] = isset($data['secretKey']) ? $data['secretKey'] : null;
        $this->container['obsBucketName'] = isset($data['obsBucketName']) ? $data['obsBucketName'] : null;
        $this->container['obsPath'] = isset($data['obsPath']) ? $data['obsPath'] : null;
        $this->container['partitionFormat'] = isset($data['partitionFormat']) ? $data['partitionFormat'] : null;
        $this->container['recordDelimiter'] = isset($data['recordDelimiter']) ? $data['recordDelimiter'] : null;
        $this->container['storeKeys'] = isset($data['storeKeys']) ? $data['storeKeys'] : null;
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
    * Gets redisAddress
    *  Redis实例地址。（仅目标端类型为Redis时需要填写）
    *
    * @return string|null
    */
    public function getRedisAddress()
    {
        return $this->container['redisAddress'];
    }

    /**
    * Sets redisAddress
    *
    * @param string|null $redisAddress Redis实例地址。（仅目标端类型为Redis时需要填写）
    *
    * @return $this
    */
    public function setRedisAddress($redisAddress)
    {
        $this->container['redisAddress'] = $redisAddress;
        return $this;
    }

    /**
    * Gets redisType
    *  Redis实例类型。（仅目标端类型为Redis时需要填写）
    *
    * @return string|null
    */
    public function getRedisType()
    {
        return $this->container['redisType'];
    }

    /**
    * Sets redisType
    *
    * @param string|null $redisType Redis实例类型。（仅目标端类型为Redis时需要填写）
    *
    * @return $this
    */
    public function setRedisType($redisType)
    {
        $this->container['redisType'] = $redisType;
        return $this;
    }

    /**
    * Gets dcsInstanceId
    *  DCS实例ID。（仅目标端类型为Redis时需要填写）
    *
    * @return string|null
    */
    public function getDcsInstanceId()
    {
        return $this->container['dcsInstanceId'];
    }

    /**
    * Sets dcsInstanceId
    *
    * @param string|null $dcsInstanceId DCS实例ID。（仅目标端类型为Redis时需要填写）
    *
    * @return $this
    */
    public function setDcsInstanceId($dcsInstanceId)
    {
        $this->container['dcsInstanceId'] = $dcsInstanceId;
        return $this;
    }

    /**
    * Gets redisPassword
    *  Redis密码。（仅目标端类型为Redis时需要填写）
    *
    * @return string|null
    */
    public function getRedisPassword()
    {
        return $this->container['redisPassword'];
    }

    /**
    * Sets redisPassword
    *
    * @param string|null $redisPassword Redis密码。（仅目标端类型为Redis时需要填写）
    *
    * @return $this
    */
    public function setRedisPassword($redisPassword)
    {
        $this->container['redisPassword'] = $redisPassword;
        return $this;
    }

    /**
    * Gets consumerStrategy
    *  转储启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅目标端类型为OBS时需要填写）
    *
    * @return string|null
    */
    public function getConsumerStrategy()
    {
        return $this->container['consumerStrategy'];
    }

    /**
    * Sets consumerStrategy
    *
    * @param string|null $consumerStrategy 转储启动偏移量，latest为获取最新的数据，earliest为获取最早的数据。（仅目标端类型为OBS时需要填写）
    *
    * @return $this
    */
    public function setConsumerStrategy($consumerStrategy)
    {
        $this->container['consumerStrategy'] = $consumerStrategy;
        return $this;
    }

    /**
    * Gets destinationFileType
    *  转储文件格式。当前只支持TEXT。（仅目标端类型为OBS时需要填写）
    *
    * @return string|null
    */
    public function getDestinationFileType()
    {
        return $this->container['destinationFileType'];
    }

    /**
    * Sets destinationFileType
    *
    * @param string|null $destinationFileType 转储文件格式。当前只支持TEXT。（仅目标端类型为OBS时需要填写）
    *
    * @return $this
    */
    public function setDestinationFileType($destinationFileType)
    {
        $this->container['destinationFileType'] = $destinationFileType;
        return $this;
    }

    /**
    * Gets deliverTimeInterval
    *  数据转储周期（秒），默认配置为300秒。（仅目标端类型为OBS时需要填写）
    *
    * @return int|null
    */
    public function getDeliverTimeInterval()
    {
        return $this->container['deliverTimeInterval'];
    }

    /**
    * Sets deliverTimeInterval
    *
    * @param int|null $deliverTimeInterval 数据转储周期（秒），默认配置为300秒。（仅目标端类型为OBS时需要填写）
    *
    * @return $this
    */
    public function setDeliverTimeInterval($deliverTimeInterval)
    {
        $this->container['deliverTimeInterval'] = $deliverTimeInterval;
        return $this;
    }

    /**
    * Gets accessKey
    *  AK，访问密钥ID。（仅目标端类型为OBS时需要填写）
    *
    * @return string|null
    */
    public function getAccessKey()
    {
        return $this->container['accessKey'];
    }

    /**
    * Sets accessKey
    *
    * @param string|null $accessKey AK，访问密钥ID。（仅目标端类型为OBS时需要填写）
    *
    * @return $this
    */
    public function setAccessKey($accessKey)
    {
        $this->container['accessKey'] = $accessKey;
        return $this;
    }

    /**
    * Gets secretKey
    *  SK，与访问密钥ID结合使用的密钥。（仅目标端类型为OBS时需要填写）
    *
    * @return string|null
    */
    public function getSecretKey()
    {
        return $this->container['secretKey'];
    }

    /**
    * Sets secretKey
    *
    * @param string|null $secretKey SK，与访问密钥ID结合使用的密钥。（仅目标端类型为OBS时需要填写）
    *
    * @return $this
    */
    public function setSecretKey($secretKey)
    {
        $this->container['secretKey'] = $secretKey;
        return $this;
    }

    /**
    * Gets obsBucketName
    *  转储地址，即存储Topic数据的OBS桶的名称。（仅目标端类型为OBS时需要填写）
    *
    * @return string|null
    */
    public function getObsBucketName()
    {
        return $this->container['obsBucketName'];
    }

    /**
    * Sets obsBucketName
    *
    * @param string|null $obsBucketName 转储地址，即存储Topic数据的OBS桶的名称。（仅目标端类型为OBS时需要填写）
    *
    * @return $this
    */
    public function setObsBucketName($obsBucketName)
    {
        $this->container['obsBucketName'] = $obsBucketName;
        return $this;
    }

    /**
    * Gets obsPath
    *  转储目录，即OBS中存储Topic的目录，多级目录可以用“/”进行分隔。（仅目标端类型为OBS时需要填写）
    *
    * @return string|null
    */
    public function getObsPath()
    {
        return $this->container['obsPath'];
    }

    /**
    * Sets obsPath
    *
    * @param string|null $obsPath 转储目录，即OBS中存储Topic的目录，多级目录可以用“/”进行分隔。（仅目标端类型为OBS时需要填写）
    *
    * @return $this
    */
    public function setObsPath($obsPath)
    {
        $this->container['obsPath'] = $obsPath;
        return $this;
    }

    /**
    * Gets partitionFormat
    *  时间目录格式。（仅目标端类型为OBS时需要填写）   - yyyy：年   - yyyy/MM：年/月   - yyyy/MM/dd：年/月/日   - yyyy/MM/dd/HH：年/月/日/时   - yyyy/MM/dd/HH/mm：年/月/日/时/分
    *
    * @return string|null
    */
    public function getPartitionFormat()
    {
        return $this->container['partitionFormat'];
    }

    /**
    * Sets partitionFormat
    *
    * @param string|null $partitionFormat 时间目录格式。（仅目标端类型为OBS时需要填写）   - yyyy：年   - yyyy/MM：年/月   - yyyy/MM/dd：年/月/日   - yyyy/MM/dd/HH：年/月/日/时   - yyyy/MM/dd/HH/mm：年/月/日/时/分
    *
    * @return $this
    */
    public function setPartitionFormat($partitionFormat)
    {
        $this->container['partitionFormat'] = $partitionFormat;
        return $this;
    }

    /**
    * Gets recordDelimiter
    *  记录分行符，用于分隔写入转储文件的用户数据。（仅目标端类型为OBS时需要填写）   取值范围：   - 逗号“,”   - 分号“;”   - 竖线“|”   - 换行符“\\n”   - NULL
    *
    * @return string|null
    */
    public function getRecordDelimiter()
    {
        return $this->container['recordDelimiter'];
    }

    /**
    * Sets recordDelimiter
    *
    * @param string|null $recordDelimiter 记录分行符，用于分隔写入转储文件的用户数据。（仅目标端类型为OBS时需要填写）   取值范围：   - 逗号“,”   - 分号“;”   - 竖线“|”   - 换行符“\\n”   - NULL
    *
    * @return $this
    */
    public function setRecordDelimiter($recordDelimiter)
    {
        $this->container['recordDelimiter'] = $recordDelimiter;
        return $this;
    }

    /**
    * Gets storeKeys
    *  是否转储Key，开启表示转储Key，关闭表示不转储Key。（仅目标端类型为OBS时需要填写）
    *
    * @return bool|null
    */
    public function getStoreKeys()
    {
        return $this->container['storeKeys'];
    }

    /**
    * Sets storeKeys
    *
    * @param bool|null $storeKeys 是否转储Key，开启表示转储Key，关闭表示不转储Key。（仅目标端类型为OBS时需要填写）
    *
    * @return $this
    */
    public function setStoreKeys($storeKeys)
    {
        $this->container['storeKeys'] = $storeKeys;
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

