<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObsDestinationDescriptor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObsDestinationDescriptor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topics  转存的topic列表名称，支持输入多个topic，以逗号“,”分隔。同时支持正则表达式。
    * topicsRegex  转存topic的正则表达式，与topics必须二选一，不能同时都设置或者“.*”。
    * consumerStrategy  转储启动偏移量：    - latest: 从Topic最后端开始消费。      - earliest: 从Topic最前端消息开始消费。  默认是latest。
    * destinationFileType  转储文件格式。当前只支持text。
    * accessKey  访问密钥AK。
    * secretKey  访问密钥SK。
    * obsBucketName  存储该通道数据的OBS桶名称。
    * obsPath  存储在obs的路径，默认可以不填。  取值范围：英文字母、数字、下划线、中划线和斜杠，最大长度为64个字符。  默认配置为空。
    * partitionFormat  将转储文件的生成时间使用“yyyy/MM/dd/HH/mm”格式生成分区字符串，用来定义写到OBS的Object文件所在的目录层次结构。      - yyyy：年      - yyyy/MM：年/月      - yyyy/MM/dd：年/月/日      - yyyy/MM/dd/HH：年/月/日/时      - yyyy/MM/dd/HH/mm：年/月/日/时/分，例如：2017/11/10/14/49，目录结构就是“2017 > 11 > 10 > 14 > 49”，“2017”表示最外层文件夹。  > 数据转储成功后，存储的目录结构为“obs_bucket_path/file_prefix/partition_format”。默认时间是GMT+8 时间
    * recordDelimiter  转储文件的记录分隔符，用于分隔写入转储文件的用户数据。  取值范围：   - 逗号“,”   - 分号“;”   - 竖线“|”   - 换行符“\\n”   - NULL  默认值：换行符“\\n”。
    * deliverTimeInterval  根据用户配置的时间，周期性的将数据导入OBS，若某个时间段内无数据，则此时间段不会生成打包文件。  取值范围：30～900  单位：秒。  > 使用OBS通道转储流式数据时该参数为必选配置。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topics' => 'string',
            'topicsRegex' => 'string',
            'consumerStrategy' => 'string',
            'destinationFileType' => 'string',
            'accessKey' => 'string',
            'secretKey' => 'string',
            'obsBucketName' => 'string',
            'obsPath' => 'string',
            'partitionFormat' => 'string',
            'recordDelimiter' => 'string',
            'deliverTimeInterval' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topics  转存的topic列表名称，支持输入多个topic，以逗号“,”分隔。同时支持正则表达式。
    * topicsRegex  转存topic的正则表达式，与topics必须二选一，不能同时都设置或者“.*”。
    * consumerStrategy  转储启动偏移量：    - latest: 从Topic最后端开始消费。      - earliest: 从Topic最前端消息开始消费。  默认是latest。
    * destinationFileType  转储文件格式。当前只支持text。
    * accessKey  访问密钥AK。
    * secretKey  访问密钥SK。
    * obsBucketName  存储该通道数据的OBS桶名称。
    * obsPath  存储在obs的路径，默认可以不填。  取值范围：英文字母、数字、下划线、中划线和斜杠，最大长度为64个字符。  默认配置为空。
    * partitionFormat  将转储文件的生成时间使用“yyyy/MM/dd/HH/mm”格式生成分区字符串，用来定义写到OBS的Object文件所在的目录层次结构。      - yyyy：年      - yyyy/MM：年/月      - yyyy/MM/dd：年/月/日      - yyyy/MM/dd/HH：年/月/日/时      - yyyy/MM/dd/HH/mm：年/月/日/时/分，例如：2017/11/10/14/49，目录结构就是“2017 > 11 > 10 > 14 > 49”，“2017”表示最外层文件夹。  > 数据转储成功后，存储的目录结构为“obs_bucket_path/file_prefix/partition_format”。默认时间是GMT+8 时间
    * recordDelimiter  转储文件的记录分隔符，用于分隔写入转储文件的用户数据。  取值范围：   - 逗号“,”   - 分号“;”   - 竖线“|”   - 换行符“\\n”   - NULL  默认值：换行符“\\n”。
    * deliverTimeInterval  根据用户配置的时间，周期性的将数据导入OBS，若某个时间段内无数据，则此时间段不会生成打包文件。  取值范围：30～900  单位：秒。  > 使用OBS通道转储流式数据时该参数为必选配置。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topics' => null,
        'topicsRegex' => null,
        'consumerStrategy' => null,
        'destinationFileType' => null,
        'accessKey' => null,
        'secretKey' => null,
        'obsBucketName' => null,
        'obsPath' => null,
        'partitionFormat' => null,
        'recordDelimiter' => null,
        'deliverTimeInterval' => null
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
    * topics  转存的topic列表名称，支持输入多个topic，以逗号“,”分隔。同时支持正则表达式。
    * topicsRegex  转存topic的正则表达式，与topics必须二选一，不能同时都设置或者“.*”。
    * consumerStrategy  转储启动偏移量：    - latest: 从Topic最后端开始消费。      - earliest: 从Topic最前端消息开始消费。  默认是latest。
    * destinationFileType  转储文件格式。当前只支持text。
    * accessKey  访问密钥AK。
    * secretKey  访问密钥SK。
    * obsBucketName  存储该通道数据的OBS桶名称。
    * obsPath  存储在obs的路径，默认可以不填。  取值范围：英文字母、数字、下划线、中划线和斜杠，最大长度为64个字符。  默认配置为空。
    * partitionFormat  将转储文件的生成时间使用“yyyy/MM/dd/HH/mm”格式生成分区字符串，用来定义写到OBS的Object文件所在的目录层次结构。      - yyyy：年      - yyyy/MM：年/月      - yyyy/MM/dd：年/月/日      - yyyy/MM/dd/HH：年/月/日/时      - yyyy/MM/dd/HH/mm：年/月/日/时/分，例如：2017/11/10/14/49，目录结构就是“2017 > 11 > 10 > 14 > 49”，“2017”表示最外层文件夹。  > 数据转储成功后，存储的目录结构为“obs_bucket_path/file_prefix/partition_format”。默认时间是GMT+8 时间
    * recordDelimiter  转储文件的记录分隔符，用于分隔写入转储文件的用户数据。  取值范围：   - 逗号“,”   - 分号“;”   - 竖线“|”   - 换行符“\\n”   - NULL  默认值：换行符“\\n”。
    * deliverTimeInterval  根据用户配置的时间，周期性的将数据导入OBS，若某个时间段内无数据，则此时间段不会生成打包文件。  取值范围：30～900  单位：秒。  > 使用OBS通道转储流式数据时该参数为必选配置。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topics' => 'topics',
            'topicsRegex' => 'topics_regex',
            'consumerStrategy' => 'consumer_strategy',
            'destinationFileType' => 'destination_file_type',
            'accessKey' => 'access_key',
            'secretKey' => 'secret_key',
            'obsBucketName' => 'obs_bucket_name',
            'obsPath' => 'obs_path',
            'partitionFormat' => 'partition_format',
            'recordDelimiter' => 'record_delimiter',
            'deliverTimeInterval' => 'deliver_time_interval'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topics  转存的topic列表名称，支持输入多个topic，以逗号“,”分隔。同时支持正则表达式。
    * topicsRegex  转存topic的正则表达式，与topics必须二选一，不能同时都设置或者“.*”。
    * consumerStrategy  转储启动偏移量：    - latest: 从Topic最后端开始消费。      - earliest: 从Topic最前端消息开始消费。  默认是latest。
    * destinationFileType  转储文件格式。当前只支持text。
    * accessKey  访问密钥AK。
    * secretKey  访问密钥SK。
    * obsBucketName  存储该通道数据的OBS桶名称。
    * obsPath  存储在obs的路径，默认可以不填。  取值范围：英文字母、数字、下划线、中划线和斜杠，最大长度为64个字符。  默认配置为空。
    * partitionFormat  将转储文件的生成时间使用“yyyy/MM/dd/HH/mm”格式生成分区字符串，用来定义写到OBS的Object文件所在的目录层次结构。      - yyyy：年      - yyyy/MM：年/月      - yyyy/MM/dd：年/月/日      - yyyy/MM/dd/HH：年/月/日/时      - yyyy/MM/dd/HH/mm：年/月/日/时/分，例如：2017/11/10/14/49，目录结构就是“2017 > 11 > 10 > 14 > 49”，“2017”表示最外层文件夹。  > 数据转储成功后，存储的目录结构为“obs_bucket_path/file_prefix/partition_format”。默认时间是GMT+8 时间
    * recordDelimiter  转储文件的记录分隔符，用于分隔写入转储文件的用户数据。  取值范围：   - 逗号“,”   - 分号“;”   - 竖线“|”   - 换行符“\\n”   - NULL  默认值：换行符“\\n”。
    * deliverTimeInterval  根据用户配置的时间，周期性的将数据导入OBS，若某个时间段内无数据，则此时间段不会生成打包文件。  取值范围：30～900  单位：秒。  > 使用OBS通道转储流式数据时该参数为必选配置。
    *
    * @var string[]
    */
    protected static $setters = [
            'topics' => 'setTopics',
            'topicsRegex' => 'setTopicsRegex',
            'consumerStrategy' => 'setConsumerStrategy',
            'destinationFileType' => 'setDestinationFileType',
            'accessKey' => 'setAccessKey',
            'secretKey' => 'setSecretKey',
            'obsBucketName' => 'setObsBucketName',
            'obsPath' => 'setObsPath',
            'partitionFormat' => 'setPartitionFormat',
            'recordDelimiter' => 'setRecordDelimiter',
            'deliverTimeInterval' => 'setDeliverTimeInterval'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topics  转存的topic列表名称，支持输入多个topic，以逗号“,”分隔。同时支持正则表达式。
    * topicsRegex  转存topic的正则表达式，与topics必须二选一，不能同时都设置或者“.*”。
    * consumerStrategy  转储启动偏移量：    - latest: 从Topic最后端开始消费。      - earliest: 从Topic最前端消息开始消费。  默认是latest。
    * destinationFileType  转储文件格式。当前只支持text。
    * accessKey  访问密钥AK。
    * secretKey  访问密钥SK。
    * obsBucketName  存储该通道数据的OBS桶名称。
    * obsPath  存储在obs的路径，默认可以不填。  取值范围：英文字母、数字、下划线、中划线和斜杠，最大长度为64个字符。  默认配置为空。
    * partitionFormat  将转储文件的生成时间使用“yyyy/MM/dd/HH/mm”格式生成分区字符串，用来定义写到OBS的Object文件所在的目录层次结构。      - yyyy：年      - yyyy/MM：年/月      - yyyy/MM/dd：年/月/日      - yyyy/MM/dd/HH：年/月/日/时      - yyyy/MM/dd/HH/mm：年/月/日/时/分，例如：2017/11/10/14/49，目录结构就是“2017 > 11 > 10 > 14 > 49”，“2017”表示最外层文件夹。  > 数据转储成功后，存储的目录结构为“obs_bucket_path/file_prefix/partition_format”。默认时间是GMT+8 时间
    * recordDelimiter  转储文件的记录分隔符，用于分隔写入转储文件的用户数据。  取值范围：   - 逗号“,”   - 分号“;”   - 竖线“|”   - 换行符“\\n”   - NULL  默认值：换行符“\\n”。
    * deliverTimeInterval  根据用户配置的时间，周期性的将数据导入OBS，若某个时间段内无数据，则此时间段不会生成打包文件。  取值范围：30～900  单位：秒。  > 使用OBS通道转储流式数据时该参数为必选配置。
    *
    * @var string[]
    */
    protected static $getters = [
            'topics' => 'getTopics',
            'topicsRegex' => 'getTopicsRegex',
            'consumerStrategy' => 'getConsumerStrategy',
            'destinationFileType' => 'getDestinationFileType',
            'accessKey' => 'getAccessKey',
            'secretKey' => 'getSecretKey',
            'obsBucketName' => 'getObsBucketName',
            'obsPath' => 'getObsPath',
            'partitionFormat' => 'getPartitionFormat',
            'recordDelimiter' => 'getRecordDelimiter',
            'deliverTimeInterval' => 'getDeliverTimeInterval'
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
    const CONSUMER_STRATEGY_LATEST = 'latest';
    const CONSUMER_STRATEGY_EARLIEST = 'earliest';
    const DESTINATION_FILE_TYPE_TEXT = 'TEXT';
    const PARTITION_FORMAT_YYYY = 'yyyy';
    const PARTITION_FORMAT_YYYY_MM = 'yyyy/MM';
    const PARTITION_FORMAT_YYYY_MM_DD = 'yyyy/MM/dd';
    const PARTITION_FORMAT_YYYY_MM_DD_HH = 'yyyy/MM/dd/HH';
    const PARTITION_FORMAT_YYYY_MM_DD_HH_MM = 'yyyy/MM/dd/HH/mm';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConsumerStrategyAllowableValues()
    {
        return [
            self::CONSUMER_STRATEGY_LATEST,
            self::CONSUMER_STRATEGY_EARLIEST,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDestinationFileTypeAllowableValues()
    {
        return [
            self::DESTINATION_FILE_TYPE_TEXT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPartitionFormatAllowableValues()
    {
        return [
            self::PARTITION_FORMAT_YYYY,
            self::PARTITION_FORMAT_YYYY_MM,
            self::PARTITION_FORMAT_YYYY_MM_DD,
            self::PARTITION_FORMAT_YYYY_MM_DD_HH,
            self::PARTITION_FORMAT_YYYY_MM_DD_HH_MM,
        ];
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
        $this->container['topics'] = isset($data['topics']) ? $data['topics'] : null;
        $this->container['topicsRegex'] = isset($data['topicsRegex']) ? $data['topicsRegex'] : null;
        $this->container['consumerStrategy'] = isset($data['consumerStrategy']) ? $data['consumerStrategy'] : null;
        $this->container['destinationFileType'] = isset($data['destinationFileType']) ? $data['destinationFileType'] : null;
        $this->container['accessKey'] = isset($data['accessKey']) ? $data['accessKey'] : null;
        $this->container['secretKey'] = isset($data['secretKey']) ? $data['secretKey'] : null;
        $this->container['obsBucketName'] = isset($data['obsBucketName']) ? $data['obsBucketName'] : null;
        $this->container['obsPath'] = isset($data['obsPath']) ? $data['obsPath'] : null;
        $this->container['partitionFormat'] = isset($data['partitionFormat']) ? $data['partitionFormat'] : null;
        $this->container['recordDelimiter'] = isset($data['recordDelimiter']) ? $data['recordDelimiter'] : null;
        $this->container['deliverTimeInterval'] = isset($data['deliverTimeInterval']) ? $data['deliverTimeInterval'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['topics'] === null) {
            $invalidProperties[] = "'topics' can't be null";
        }
        if ($this->container['consumerStrategy'] === null) {
            $invalidProperties[] = "'consumerStrategy' can't be null";
        }
            $allowedValues = $this->getConsumerStrategyAllowableValues();
                if (!is_null($this->container['consumerStrategy']) && !in_array($this->container['consumerStrategy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'consumerStrategy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['destinationFileType'] === null) {
            $invalidProperties[] = "'destinationFileType' can't be null";
        }
            $allowedValues = $this->getDestinationFileTypeAllowableValues();
                if (!is_null($this->container['destinationFileType']) && !in_array($this->container['destinationFileType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'destinationFileType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['accessKey'] === null) {
            $invalidProperties[] = "'accessKey' can't be null";
        }
        if ($this->container['secretKey'] === null) {
            $invalidProperties[] = "'secretKey' can't be null";
        }
        if ($this->container['obsBucketName'] === null) {
            $invalidProperties[] = "'obsBucketName' can't be null";
        }
        if ($this->container['partitionFormat'] === null) {
            $invalidProperties[] = "'partitionFormat' can't be null";
        }
            $allowedValues = $this->getPartitionFormatAllowableValues();
                if (!is_null($this->container['partitionFormat']) && !in_array($this->container['partitionFormat'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'partitionFormat', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['deliverTimeInterval'] === null) {
            $invalidProperties[] = "'deliverTimeInterval' can't be null";
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
    * Gets topics
    *  转存的topic列表名称，支持输入多个topic，以逗号“,”分隔。同时支持正则表达式。
    *
    * @return string
    */
    public function getTopics()
    {
        return $this->container['topics'];
    }

    /**
    * Sets topics
    *
    * @param string $topics 转存的topic列表名称，支持输入多个topic，以逗号“,”分隔。同时支持正则表达式。
    *
    * @return $this
    */
    public function setTopics($topics)
    {
        $this->container['topics'] = $topics;
        return $this;
    }

    /**
    * Gets topicsRegex
    *  转存topic的正则表达式，与topics必须二选一，不能同时都设置或者“.*”。
    *
    * @return string|null
    */
    public function getTopicsRegex()
    {
        return $this->container['topicsRegex'];
    }

    /**
    * Sets topicsRegex
    *
    * @param string|null $topicsRegex 转存topic的正则表达式，与topics必须二选一，不能同时都设置或者“.*”。
    *
    * @return $this
    */
    public function setTopicsRegex($topicsRegex)
    {
        $this->container['topicsRegex'] = $topicsRegex;
        return $this;
    }

    /**
    * Gets consumerStrategy
    *  转储启动偏移量：    - latest: 从Topic最后端开始消费。      - earliest: 从Topic最前端消息开始消费。  默认是latest。
    *
    * @return string
    */
    public function getConsumerStrategy()
    {
        return $this->container['consumerStrategy'];
    }

    /**
    * Sets consumerStrategy
    *
    * @param string $consumerStrategy 转储启动偏移量：    - latest: 从Topic最后端开始消费。      - earliest: 从Topic最前端消息开始消费。  默认是latest。
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
    *  转储文件格式。当前只支持text。
    *
    * @return string
    */
    public function getDestinationFileType()
    {
        return $this->container['destinationFileType'];
    }

    /**
    * Sets destinationFileType
    *
    * @param string $destinationFileType 转储文件格式。当前只支持text。
    *
    * @return $this
    */
    public function setDestinationFileType($destinationFileType)
    {
        $this->container['destinationFileType'] = $destinationFileType;
        return $this;
    }

    /**
    * Gets accessKey
    *  访问密钥AK。
    *
    * @return string
    */
    public function getAccessKey()
    {
        return $this->container['accessKey'];
    }

    /**
    * Sets accessKey
    *
    * @param string $accessKey 访问密钥AK。
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
    *  访问密钥SK。
    *
    * @return string
    */
    public function getSecretKey()
    {
        return $this->container['secretKey'];
    }

    /**
    * Sets secretKey
    *
    * @param string $secretKey 访问密钥SK。
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
    *  存储该通道数据的OBS桶名称。
    *
    * @return string
    */
    public function getObsBucketName()
    {
        return $this->container['obsBucketName'];
    }

    /**
    * Sets obsBucketName
    *
    * @param string $obsBucketName 存储该通道数据的OBS桶名称。
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
    *  存储在obs的路径，默认可以不填。  取值范围：英文字母、数字、下划线、中划线和斜杠，最大长度为64个字符。  默认配置为空。
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
    * @param string|null $obsPath 存储在obs的路径，默认可以不填。  取值范围：英文字母、数字、下划线、中划线和斜杠，最大长度为64个字符。  默认配置为空。
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
    *  将转储文件的生成时间使用“yyyy/MM/dd/HH/mm”格式生成分区字符串，用来定义写到OBS的Object文件所在的目录层次结构。      - yyyy：年      - yyyy/MM：年/月      - yyyy/MM/dd：年/月/日      - yyyy/MM/dd/HH：年/月/日/时      - yyyy/MM/dd/HH/mm：年/月/日/时/分，例如：2017/11/10/14/49，目录结构就是“2017 > 11 > 10 > 14 > 49”，“2017”表示最外层文件夹。  > 数据转储成功后，存储的目录结构为“obs_bucket_path/file_prefix/partition_format”。默认时间是GMT+8 时间
    *
    * @return string
    */
    public function getPartitionFormat()
    {
        return $this->container['partitionFormat'];
    }

    /**
    * Sets partitionFormat
    *
    * @param string $partitionFormat 将转储文件的生成时间使用“yyyy/MM/dd/HH/mm”格式生成分区字符串，用来定义写到OBS的Object文件所在的目录层次结构。      - yyyy：年      - yyyy/MM：年/月      - yyyy/MM/dd：年/月/日      - yyyy/MM/dd/HH：年/月/日/时      - yyyy/MM/dd/HH/mm：年/月/日/时/分，例如：2017/11/10/14/49，目录结构就是“2017 > 11 > 10 > 14 > 49”，“2017”表示最外层文件夹。  > 数据转储成功后，存储的目录结构为“obs_bucket_path/file_prefix/partition_format”。默认时间是GMT+8 时间
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
    *  转储文件的记录分隔符，用于分隔写入转储文件的用户数据。  取值范围：   - 逗号“,”   - 分号“;”   - 竖线“|”   - 换行符“\\n”   - NULL  默认值：换行符“\\n”。
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
    * @param string|null $recordDelimiter 转储文件的记录分隔符，用于分隔写入转储文件的用户数据。  取值范围：   - 逗号“,”   - 分号“;”   - 竖线“|”   - 换行符“\\n”   - NULL  默认值：换行符“\\n”。
    *
    * @return $this
    */
    public function setRecordDelimiter($recordDelimiter)
    {
        $this->container['recordDelimiter'] = $recordDelimiter;
        return $this;
    }

    /**
    * Gets deliverTimeInterval
    *  根据用户配置的时间，周期性的将数据导入OBS，若某个时间段内无数据，则此时间段不会生成打包文件。  取值范围：30～900  单位：秒。  > 使用OBS通道转储流式数据时该参数为必选配置。
    *
    * @return int
    */
    public function getDeliverTimeInterval()
    {
        return $this->container['deliverTimeInterval'];
    }

    /**
    * Sets deliverTimeInterval
    *
    * @param int $deliverTimeInterval 根据用户配置的时间，周期性的将数据导入OBS，若某个时间段内无数据，则此时间段不会生成打包文件。  取值范围：30～900  单位：秒。  > 使用OBS通道转储流式数据时该参数为必选配置。
    *
    * @return $this
    */
    public function setDeliverTimeInterval($deliverTimeInterval)
    {
        $this->container['deliverTimeInterval'] = $deliverTimeInterval;
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

