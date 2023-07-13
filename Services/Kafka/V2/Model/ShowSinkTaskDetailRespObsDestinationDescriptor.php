<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSinkTaskDetailRespObsDestinationDescriptor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSinkTaskDetailResp_obs_destination_descriptor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * consumerStrategy  消费启动策略：  - latest：从Topic最后端开始消费。  - earliest: 从Topic最前端消息开始消费。  默认是latest。
    * destinationFileType  转储文件格式。目前只支持text格式。
    * obsBucketName  存储该通道数据的OBS桶名称。
    * obsPath  存储在obs的路径。
    * partitionFormat  将转储文件的生成时间使用“yyyy/MM/dd/HH/mm”格式生成分区字符串，用来定义写到OBS的Object文件所在的目录层次结构。   - N/A：置空，不使用日期时间目录。   - yyyy：年   - yyyy/MM：年/月   - yyyy/MM/dd：年/月/日   - yyyy/MM/dd/HH：年/月/日/时   - yyyy/MM/dd/HH/mm：年/月/日/时/分，例如：2017/11/10/14/49，目录结构就是“2017 > 11 > 10 > 14 > 49”，“2017”表示最外层文件夹。  默认值：空 > 数据转储成功后，存储的目录结构为“obs_bucket_path/file_prefix/partition_format”。默认时间是GMT+8 时间
    * recordDelimiter  转储文件的记录分隔符，用于分隔写入转储文件的用户数据。 取值范围：   - 逗号“,”   - 分号“;”   - 竖线“|”   - 换行符“\\n”   - NULL  默认值：换行符“\\n”。
    * deliverTimeInterval  根据用户配置的时间，周期性的将数据导入OBS，若某个时间段内无数据，则此时间段不会生成打包文件。 取值范围：30～900 缺省值：300 单位：秒。 > 使用OBS通道转储流式数据时该参数为必选配置。
    * obsPartSize  每个传输文件多大后就开始上传，单位为byte。 默认值5242880。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'consumerStrategy' => 'string',
            'destinationFileType' => 'string',
            'obsBucketName' => 'string',
            'obsPath' => 'string',
            'partitionFormat' => 'string',
            'recordDelimiter' => 'string',
            'deliverTimeInterval' => 'int',
            'obsPartSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * consumerStrategy  消费启动策略：  - latest：从Topic最后端开始消费。  - earliest: 从Topic最前端消息开始消费。  默认是latest。
    * destinationFileType  转储文件格式。目前只支持text格式。
    * obsBucketName  存储该通道数据的OBS桶名称。
    * obsPath  存储在obs的路径。
    * partitionFormat  将转储文件的生成时间使用“yyyy/MM/dd/HH/mm”格式生成分区字符串，用来定义写到OBS的Object文件所在的目录层次结构。   - N/A：置空，不使用日期时间目录。   - yyyy：年   - yyyy/MM：年/月   - yyyy/MM/dd：年/月/日   - yyyy/MM/dd/HH：年/月/日/时   - yyyy/MM/dd/HH/mm：年/月/日/时/分，例如：2017/11/10/14/49，目录结构就是“2017 > 11 > 10 > 14 > 49”，“2017”表示最外层文件夹。  默认值：空 > 数据转储成功后，存储的目录结构为“obs_bucket_path/file_prefix/partition_format”。默认时间是GMT+8 时间
    * recordDelimiter  转储文件的记录分隔符，用于分隔写入转储文件的用户数据。 取值范围：   - 逗号“,”   - 分号“;”   - 竖线“|”   - 换行符“\\n”   - NULL  默认值：换行符“\\n”。
    * deliverTimeInterval  根据用户配置的时间，周期性的将数据导入OBS，若某个时间段内无数据，则此时间段不会生成打包文件。 取值范围：30～900 缺省值：300 单位：秒。 > 使用OBS通道转储流式数据时该参数为必选配置。
    * obsPartSize  每个传输文件多大后就开始上传，单位为byte。 默认值5242880。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'consumerStrategy' => null,
        'destinationFileType' => null,
        'obsBucketName' => null,
        'obsPath' => null,
        'partitionFormat' => null,
        'recordDelimiter' => null,
        'deliverTimeInterval' => null,
        'obsPartSize' => 'int64'
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
    * consumerStrategy  消费启动策略：  - latest：从Topic最后端开始消费。  - earliest: 从Topic最前端消息开始消费。  默认是latest。
    * destinationFileType  转储文件格式。目前只支持text格式。
    * obsBucketName  存储该通道数据的OBS桶名称。
    * obsPath  存储在obs的路径。
    * partitionFormat  将转储文件的生成时间使用“yyyy/MM/dd/HH/mm”格式生成分区字符串，用来定义写到OBS的Object文件所在的目录层次结构。   - N/A：置空，不使用日期时间目录。   - yyyy：年   - yyyy/MM：年/月   - yyyy/MM/dd：年/月/日   - yyyy/MM/dd/HH：年/月/日/时   - yyyy/MM/dd/HH/mm：年/月/日/时/分，例如：2017/11/10/14/49，目录结构就是“2017 > 11 > 10 > 14 > 49”，“2017”表示最外层文件夹。  默认值：空 > 数据转储成功后，存储的目录结构为“obs_bucket_path/file_prefix/partition_format”。默认时间是GMT+8 时间
    * recordDelimiter  转储文件的记录分隔符，用于分隔写入转储文件的用户数据。 取值范围：   - 逗号“,”   - 分号“;”   - 竖线“|”   - 换行符“\\n”   - NULL  默认值：换行符“\\n”。
    * deliverTimeInterval  根据用户配置的时间，周期性的将数据导入OBS，若某个时间段内无数据，则此时间段不会生成打包文件。 取值范围：30～900 缺省值：300 单位：秒。 > 使用OBS通道转储流式数据时该参数为必选配置。
    * obsPartSize  每个传输文件多大后就开始上传，单位为byte。 默认值5242880。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'consumerStrategy' => 'consumer_strategy',
            'destinationFileType' => 'destination_file_type',
            'obsBucketName' => 'obs_bucket_name',
            'obsPath' => 'obs_path',
            'partitionFormat' => 'partition_format',
            'recordDelimiter' => 'record_delimiter',
            'deliverTimeInterval' => 'deliver_time_interval',
            'obsPartSize' => 'obs_part_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * consumerStrategy  消费启动策略：  - latest：从Topic最后端开始消费。  - earliest: 从Topic最前端消息开始消费。  默认是latest。
    * destinationFileType  转储文件格式。目前只支持text格式。
    * obsBucketName  存储该通道数据的OBS桶名称。
    * obsPath  存储在obs的路径。
    * partitionFormat  将转储文件的生成时间使用“yyyy/MM/dd/HH/mm”格式生成分区字符串，用来定义写到OBS的Object文件所在的目录层次结构。   - N/A：置空，不使用日期时间目录。   - yyyy：年   - yyyy/MM：年/月   - yyyy/MM/dd：年/月/日   - yyyy/MM/dd/HH：年/月/日/时   - yyyy/MM/dd/HH/mm：年/月/日/时/分，例如：2017/11/10/14/49，目录结构就是“2017 > 11 > 10 > 14 > 49”，“2017”表示最外层文件夹。  默认值：空 > 数据转储成功后，存储的目录结构为“obs_bucket_path/file_prefix/partition_format”。默认时间是GMT+8 时间
    * recordDelimiter  转储文件的记录分隔符，用于分隔写入转储文件的用户数据。 取值范围：   - 逗号“,”   - 分号“;”   - 竖线“|”   - 换行符“\\n”   - NULL  默认值：换行符“\\n”。
    * deliverTimeInterval  根据用户配置的时间，周期性的将数据导入OBS，若某个时间段内无数据，则此时间段不会生成打包文件。 取值范围：30～900 缺省值：300 单位：秒。 > 使用OBS通道转储流式数据时该参数为必选配置。
    * obsPartSize  每个传输文件多大后就开始上传，单位为byte。 默认值5242880。
    *
    * @var string[]
    */
    protected static $setters = [
            'consumerStrategy' => 'setConsumerStrategy',
            'destinationFileType' => 'setDestinationFileType',
            'obsBucketName' => 'setObsBucketName',
            'obsPath' => 'setObsPath',
            'partitionFormat' => 'setPartitionFormat',
            'recordDelimiter' => 'setRecordDelimiter',
            'deliverTimeInterval' => 'setDeliverTimeInterval',
            'obsPartSize' => 'setObsPartSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * consumerStrategy  消费启动策略：  - latest：从Topic最后端开始消费。  - earliest: 从Topic最前端消息开始消费。  默认是latest。
    * destinationFileType  转储文件格式。目前只支持text格式。
    * obsBucketName  存储该通道数据的OBS桶名称。
    * obsPath  存储在obs的路径。
    * partitionFormat  将转储文件的生成时间使用“yyyy/MM/dd/HH/mm”格式生成分区字符串，用来定义写到OBS的Object文件所在的目录层次结构。   - N/A：置空，不使用日期时间目录。   - yyyy：年   - yyyy/MM：年/月   - yyyy/MM/dd：年/月/日   - yyyy/MM/dd/HH：年/月/日/时   - yyyy/MM/dd/HH/mm：年/月/日/时/分，例如：2017/11/10/14/49，目录结构就是“2017 > 11 > 10 > 14 > 49”，“2017”表示最外层文件夹。  默认值：空 > 数据转储成功后，存储的目录结构为“obs_bucket_path/file_prefix/partition_format”。默认时间是GMT+8 时间
    * recordDelimiter  转储文件的记录分隔符，用于分隔写入转储文件的用户数据。 取值范围：   - 逗号“,”   - 分号“;”   - 竖线“|”   - 换行符“\\n”   - NULL  默认值：换行符“\\n”。
    * deliverTimeInterval  根据用户配置的时间，周期性的将数据导入OBS，若某个时间段内无数据，则此时间段不会生成打包文件。 取值范围：30～900 缺省值：300 单位：秒。 > 使用OBS通道转储流式数据时该参数为必选配置。
    * obsPartSize  每个传输文件多大后就开始上传，单位为byte。 默认值5242880。
    *
    * @var string[]
    */
    protected static $getters = [
            'consumerStrategy' => 'getConsumerStrategy',
            'destinationFileType' => 'getDestinationFileType',
            'obsBucketName' => 'getObsBucketName',
            'obsPath' => 'getObsPath',
            'partitionFormat' => 'getPartitionFormat',
            'recordDelimiter' => 'getRecordDelimiter',
            'deliverTimeInterval' => 'getDeliverTimeInterval',
            'obsPartSize' => 'getObsPartSize'
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
        $this->container['consumerStrategy'] = isset($data['consumerStrategy']) ? $data['consumerStrategy'] : null;
        $this->container['destinationFileType'] = isset($data['destinationFileType']) ? $data['destinationFileType'] : null;
        $this->container['obsBucketName'] = isset($data['obsBucketName']) ? $data['obsBucketName'] : null;
        $this->container['obsPath'] = isset($data['obsPath']) ? $data['obsPath'] : null;
        $this->container['partitionFormat'] = isset($data['partitionFormat']) ? $data['partitionFormat'] : null;
        $this->container['recordDelimiter'] = isset($data['recordDelimiter']) ? $data['recordDelimiter'] : null;
        $this->container['deliverTimeInterval'] = isset($data['deliverTimeInterval']) ? $data['deliverTimeInterval'] : null;
        $this->container['obsPartSize'] = isset($data['obsPartSize']) ? $data['obsPartSize'] : null;
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
    * Gets consumerStrategy
    *  消费启动策略：  - latest：从Topic最后端开始消费。  - earliest: 从Topic最前端消息开始消费。  默认是latest。
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
    * @param string|null $consumerStrategy 消费启动策略：  - latest：从Topic最后端开始消费。  - earliest: 从Topic最前端消息开始消费。  默认是latest。
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
    *  转储文件格式。目前只支持text格式。
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
    * @param string|null $destinationFileType 转储文件格式。目前只支持text格式。
    *
    * @return $this
    */
    public function setDestinationFileType($destinationFileType)
    {
        $this->container['destinationFileType'] = $destinationFileType;
        return $this;
    }

    /**
    * Gets obsBucketName
    *  存储该通道数据的OBS桶名称。
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
    * @param string|null $obsBucketName 存储该通道数据的OBS桶名称。
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
    *  存储在obs的路径。
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
    * @param string|null $obsPath 存储在obs的路径。
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
    *  将转储文件的生成时间使用“yyyy/MM/dd/HH/mm”格式生成分区字符串，用来定义写到OBS的Object文件所在的目录层次结构。   - N/A：置空，不使用日期时间目录。   - yyyy：年   - yyyy/MM：年/月   - yyyy/MM/dd：年/月/日   - yyyy/MM/dd/HH：年/月/日/时   - yyyy/MM/dd/HH/mm：年/月/日/时/分，例如：2017/11/10/14/49，目录结构就是“2017 > 11 > 10 > 14 > 49”，“2017”表示最外层文件夹。  默认值：空 > 数据转储成功后，存储的目录结构为“obs_bucket_path/file_prefix/partition_format”。默认时间是GMT+8 时间
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
    * @param string|null $partitionFormat 将转储文件的生成时间使用“yyyy/MM/dd/HH/mm”格式生成分区字符串，用来定义写到OBS的Object文件所在的目录层次结构。   - N/A：置空，不使用日期时间目录。   - yyyy：年   - yyyy/MM：年/月   - yyyy/MM/dd：年/月/日   - yyyy/MM/dd/HH：年/月/日/时   - yyyy/MM/dd/HH/mm：年/月/日/时/分，例如：2017/11/10/14/49，目录结构就是“2017 > 11 > 10 > 14 > 49”，“2017”表示最外层文件夹。  默认值：空 > 数据转储成功后，存储的目录结构为“obs_bucket_path/file_prefix/partition_format”。默认时间是GMT+8 时间
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
    *  转储文件的记录分隔符，用于分隔写入转储文件的用户数据。 取值范围：   - 逗号“,”   - 分号“;”   - 竖线“|”   - 换行符“\\n”   - NULL  默认值：换行符“\\n”。
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
    * @param string|null $recordDelimiter 转储文件的记录分隔符，用于分隔写入转储文件的用户数据。 取值范围：   - 逗号“,”   - 分号“;”   - 竖线“|”   - 换行符“\\n”   - NULL  默认值：换行符“\\n”。
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
    *  根据用户配置的时间，周期性的将数据导入OBS，若某个时间段内无数据，则此时间段不会生成打包文件。 取值范围：30～900 缺省值：300 单位：秒。 > 使用OBS通道转储流式数据时该参数为必选配置。
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
    * @param int|null $deliverTimeInterval 根据用户配置的时间，周期性的将数据导入OBS，若某个时间段内无数据，则此时间段不会生成打包文件。 取值范围：30～900 缺省值：300 单位：秒。 > 使用OBS通道转储流式数据时该参数为必选配置。
    *
    * @return $this
    */
    public function setDeliverTimeInterval($deliverTimeInterval)
    {
        $this->container['deliverTimeInterval'] = $deliverTimeInterval;
        return $this;
    }

    /**
    * Gets obsPartSize
    *  每个传输文件多大后就开始上传，单位为byte。 默认值5242880。
    *
    * @return int|null
    */
    public function getObsPartSize()
    {
        return $this->container['obsPartSize'];
    }

    /**
    * Sets obsPartSize
    *
    * @param int|null $obsPartSize 每个传输文件多大后就开始上传，单位为byte。 默认值5242880。
    *
    * @return $this
    */
    public function setObsPartSize($obsPartSize)
    {
        $this->container['obsPartSize'] = $obsPartSize;
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

