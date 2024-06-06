<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportSqlJobResultRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportSqlJobResultRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataPath  ExportResult
    * compress  导出数据的压缩格式，目前支持gzip，bzip2和deflate压缩方式； 默认值为none，表示不压缩。
    * dataType  导出数据的存储格式，暂时只支持csv格式。
    * queueName  指定执行该任务的队列。若不指定队列，将采用default队列执行操作。
    * exportMode  导出模式，目前支持“ErrorIfExists”，“Overwrite”，不指定“export_mode”则默认为“ErrorIfExists”。  “ErrorIfExists”：存在即报错。指定的导出目录必须不存在，如果指定目录已经存在，系统将返回错误信息，无法执行导出操作。 “Overwrite”：覆盖。在指定目录下新建文件，会删除已有文件。
    * withColumnHeader  导出csv格式数据时，是否导出列名。  设置为“true”，表示导出列名。 设置为“false”，表示不导出列名。 若为空，默认为“false”。
    * limitNum  导出数据条数，默认为0表示全部
    * encodingType  导出数据的编码格式。支持\"utf-8\"，\"gb2312\"，\"gbk\"三种，如果不填写默认为\"utf-8\"。
    * quoteChar  用户自定义引用字符
    * escapeChar  用户自定义转义字符
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataPath' => 'string',
            'compress' => 'string',
            'dataType' => 'string',
            'queueName' => 'string',
            'exportMode' => 'string',
            'withColumnHeader' => 'bool',
            'limitNum' => 'int',
            'encodingType' => 'string',
            'quoteChar' => 'string',
            'escapeChar' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataPath  ExportResult
    * compress  导出数据的压缩格式，目前支持gzip，bzip2和deflate压缩方式； 默认值为none，表示不压缩。
    * dataType  导出数据的存储格式，暂时只支持csv格式。
    * queueName  指定执行该任务的队列。若不指定队列，将采用default队列执行操作。
    * exportMode  导出模式，目前支持“ErrorIfExists”，“Overwrite”，不指定“export_mode”则默认为“ErrorIfExists”。  “ErrorIfExists”：存在即报错。指定的导出目录必须不存在，如果指定目录已经存在，系统将返回错误信息，无法执行导出操作。 “Overwrite”：覆盖。在指定目录下新建文件，会删除已有文件。
    * withColumnHeader  导出csv格式数据时，是否导出列名。  设置为“true”，表示导出列名。 设置为“false”，表示不导出列名。 若为空，默认为“false”。
    * limitNum  导出数据条数，默认为0表示全部
    * encodingType  导出数据的编码格式。支持\"utf-8\"，\"gb2312\"，\"gbk\"三种，如果不填写默认为\"utf-8\"。
    * quoteChar  用户自定义引用字符
    * escapeChar  用户自定义转义字符
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataPath' => null,
        'compress' => null,
        'dataType' => null,
        'queueName' => null,
        'exportMode' => null,
        'withColumnHeader' => null,
        'limitNum' => 'int32',
        'encodingType' => null,
        'quoteChar' => null,
        'escapeChar' => null
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
    * dataPath  ExportResult
    * compress  导出数据的压缩格式，目前支持gzip，bzip2和deflate压缩方式； 默认值为none，表示不压缩。
    * dataType  导出数据的存储格式，暂时只支持csv格式。
    * queueName  指定执行该任务的队列。若不指定队列，将采用default队列执行操作。
    * exportMode  导出模式，目前支持“ErrorIfExists”，“Overwrite”，不指定“export_mode”则默认为“ErrorIfExists”。  “ErrorIfExists”：存在即报错。指定的导出目录必须不存在，如果指定目录已经存在，系统将返回错误信息，无法执行导出操作。 “Overwrite”：覆盖。在指定目录下新建文件，会删除已有文件。
    * withColumnHeader  导出csv格式数据时，是否导出列名。  设置为“true”，表示导出列名。 设置为“false”，表示不导出列名。 若为空，默认为“false”。
    * limitNum  导出数据条数，默认为0表示全部
    * encodingType  导出数据的编码格式。支持\"utf-8\"，\"gb2312\"，\"gbk\"三种，如果不填写默认为\"utf-8\"。
    * quoteChar  用户自定义引用字符
    * escapeChar  用户自定义转义字符
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataPath' => 'data_path',
            'compress' => 'compress',
            'dataType' => 'data_type',
            'queueName' => 'queue_name',
            'exportMode' => 'export_mode',
            'withColumnHeader' => 'with_column_header',
            'limitNum' => 'limit_num',
            'encodingType' => 'encoding_type',
            'quoteChar' => 'quote_char',
            'escapeChar' => 'escape_char'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataPath  ExportResult
    * compress  导出数据的压缩格式，目前支持gzip，bzip2和deflate压缩方式； 默认值为none，表示不压缩。
    * dataType  导出数据的存储格式，暂时只支持csv格式。
    * queueName  指定执行该任务的队列。若不指定队列，将采用default队列执行操作。
    * exportMode  导出模式，目前支持“ErrorIfExists”，“Overwrite”，不指定“export_mode”则默认为“ErrorIfExists”。  “ErrorIfExists”：存在即报错。指定的导出目录必须不存在，如果指定目录已经存在，系统将返回错误信息，无法执行导出操作。 “Overwrite”：覆盖。在指定目录下新建文件，会删除已有文件。
    * withColumnHeader  导出csv格式数据时，是否导出列名。  设置为“true”，表示导出列名。 设置为“false”，表示不导出列名。 若为空，默认为“false”。
    * limitNum  导出数据条数，默认为0表示全部
    * encodingType  导出数据的编码格式。支持\"utf-8\"，\"gb2312\"，\"gbk\"三种，如果不填写默认为\"utf-8\"。
    * quoteChar  用户自定义引用字符
    * escapeChar  用户自定义转义字符
    *
    * @var string[]
    */
    protected static $setters = [
            'dataPath' => 'setDataPath',
            'compress' => 'setCompress',
            'dataType' => 'setDataType',
            'queueName' => 'setQueueName',
            'exportMode' => 'setExportMode',
            'withColumnHeader' => 'setWithColumnHeader',
            'limitNum' => 'setLimitNum',
            'encodingType' => 'setEncodingType',
            'quoteChar' => 'setQuoteChar',
            'escapeChar' => 'setEscapeChar'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataPath  ExportResult
    * compress  导出数据的压缩格式，目前支持gzip，bzip2和deflate压缩方式； 默认值为none，表示不压缩。
    * dataType  导出数据的存储格式，暂时只支持csv格式。
    * queueName  指定执行该任务的队列。若不指定队列，将采用default队列执行操作。
    * exportMode  导出模式，目前支持“ErrorIfExists”，“Overwrite”，不指定“export_mode”则默认为“ErrorIfExists”。  “ErrorIfExists”：存在即报错。指定的导出目录必须不存在，如果指定目录已经存在，系统将返回错误信息，无法执行导出操作。 “Overwrite”：覆盖。在指定目录下新建文件，会删除已有文件。
    * withColumnHeader  导出csv格式数据时，是否导出列名。  设置为“true”，表示导出列名。 设置为“false”，表示不导出列名。 若为空，默认为“false”。
    * limitNum  导出数据条数，默认为0表示全部
    * encodingType  导出数据的编码格式。支持\"utf-8\"，\"gb2312\"，\"gbk\"三种，如果不填写默认为\"utf-8\"。
    * quoteChar  用户自定义引用字符
    * escapeChar  用户自定义转义字符
    *
    * @var string[]
    */
    protected static $getters = [
            'dataPath' => 'getDataPath',
            'compress' => 'getCompress',
            'dataType' => 'getDataType',
            'queueName' => 'getQueueName',
            'exportMode' => 'getExportMode',
            'withColumnHeader' => 'getWithColumnHeader',
            'limitNum' => 'getLimitNum',
            'encodingType' => 'getEncodingType',
            'quoteChar' => 'getQuoteChar',
            'escapeChar' => 'getEscapeChar'
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
    const EXPORT_MODE_ERROR_IF_EXISTS = 'ErrorIfExists';
    const EXPORT_MODE_OVERWRITE = 'Overwrite';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getExportModeAllowableValues()
    {
        return [
            self::EXPORT_MODE_ERROR_IF_EXISTS,
            self::EXPORT_MODE_OVERWRITE,
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
        $this->container['dataPath'] = isset($data['dataPath']) ? $data['dataPath'] : null;
        $this->container['compress'] = isset($data['compress']) ? $data['compress'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['exportMode'] = isset($data['exportMode']) ? $data['exportMode'] : null;
        $this->container['withColumnHeader'] = isset($data['withColumnHeader']) ? $data['withColumnHeader'] : null;
        $this->container['limitNum'] = isset($data['limitNum']) ? $data['limitNum'] : null;
        $this->container['encodingType'] = isset($data['encodingType']) ? $data['encodingType'] : null;
        $this->container['quoteChar'] = isset($data['quoteChar']) ? $data['quoteChar'] : null;
        $this->container['escapeChar'] = isset($data['escapeChar']) ? $data['escapeChar'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dataPath'] === null) {
            $invalidProperties[] = "'dataPath' can't be null";
        }
            if (!is_null($this->container['compress']) && !preg_match("/gzip/", $this->container['compress'])) {
                $invalidProperties[] = "invalid value for 'compress', must be conform to the pattern /gzip/.";
            }
        if ($this->container['dataType'] === null) {
            $invalidProperties[] = "'dataType' can't be null";
        }
            $allowedValues = $this->getExportModeAllowableValues();
                if (!is_null($this->container['exportMode']) && !in_array($this->container['exportMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'exportMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets dataPath
    *  ExportResult
    *
    * @return string
    */
    public function getDataPath()
    {
        return $this->container['dataPath'];
    }

    /**
    * Sets dataPath
    *
    * @param string $dataPath ExportResult
    *
    * @return $this
    */
    public function setDataPath($dataPath)
    {
        $this->container['dataPath'] = $dataPath;
        return $this;
    }

    /**
    * Gets compress
    *  导出数据的压缩格式，目前支持gzip，bzip2和deflate压缩方式； 默认值为none，表示不压缩。
    *
    * @return string|null
    */
    public function getCompress()
    {
        return $this->container['compress'];
    }

    /**
    * Sets compress
    *
    * @param string|null $compress 导出数据的压缩格式，目前支持gzip，bzip2和deflate压缩方式； 默认值为none，表示不压缩。
    *
    * @return $this
    */
    public function setCompress($compress)
    {
        $this->container['compress'] = $compress;
        return $this;
    }

    /**
    * Gets dataType
    *  导出数据的存储格式，暂时只支持csv格式。
    *
    * @return string
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param string $dataType 导出数据的存储格式，暂时只支持csv格式。
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets queueName
    *  指定执行该任务的队列。若不指定队列，将采用default队列执行操作。
    *
    * @return string|null
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string|null $queueName 指定执行该任务的队列。若不指定队列，将采用default队列执行操作。
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets exportMode
    *  导出模式，目前支持“ErrorIfExists”，“Overwrite”，不指定“export_mode”则默认为“ErrorIfExists”。  “ErrorIfExists”：存在即报错。指定的导出目录必须不存在，如果指定目录已经存在，系统将返回错误信息，无法执行导出操作。 “Overwrite”：覆盖。在指定目录下新建文件，会删除已有文件。
    *
    * @return string|null
    */
    public function getExportMode()
    {
        return $this->container['exportMode'];
    }

    /**
    * Sets exportMode
    *
    * @param string|null $exportMode 导出模式，目前支持“ErrorIfExists”，“Overwrite”，不指定“export_mode”则默认为“ErrorIfExists”。  “ErrorIfExists”：存在即报错。指定的导出目录必须不存在，如果指定目录已经存在，系统将返回错误信息，无法执行导出操作。 “Overwrite”：覆盖。在指定目录下新建文件，会删除已有文件。
    *
    * @return $this
    */
    public function setExportMode($exportMode)
    {
        $this->container['exportMode'] = $exportMode;
        return $this;
    }

    /**
    * Gets withColumnHeader
    *  导出csv格式数据时，是否导出列名。  设置为“true”，表示导出列名。 设置为“false”，表示不导出列名。 若为空，默认为“false”。
    *
    * @return bool|null
    */
    public function getWithColumnHeader()
    {
        return $this->container['withColumnHeader'];
    }

    /**
    * Sets withColumnHeader
    *
    * @param bool|null $withColumnHeader 导出csv格式数据时，是否导出列名。  设置为“true”，表示导出列名。 设置为“false”，表示不导出列名。 若为空，默认为“false”。
    *
    * @return $this
    */
    public function setWithColumnHeader($withColumnHeader)
    {
        $this->container['withColumnHeader'] = $withColumnHeader;
        return $this;
    }

    /**
    * Gets limitNum
    *  导出数据条数，默认为0表示全部
    *
    * @return int|null
    */
    public function getLimitNum()
    {
        return $this->container['limitNum'];
    }

    /**
    * Sets limitNum
    *
    * @param int|null $limitNum 导出数据条数，默认为0表示全部
    *
    * @return $this
    */
    public function setLimitNum($limitNum)
    {
        $this->container['limitNum'] = $limitNum;
        return $this;
    }

    /**
    * Gets encodingType
    *  导出数据的编码格式。支持\"utf-8\"，\"gb2312\"，\"gbk\"三种，如果不填写默认为\"utf-8\"。
    *
    * @return string|null
    */
    public function getEncodingType()
    {
        return $this->container['encodingType'];
    }

    /**
    * Sets encodingType
    *
    * @param string|null $encodingType 导出数据的编码格式。支持\"utf-8\"，\"gb2312\"，\"gbk\"三种，如果不填写默认为\"utf-8\"。
    *
    * @return $this
    */
    public function setEncodingType($encodingType)
    {
        $this->container['encodingType'] = $encodingType;
        return $this;
    }

    /**
    * Gets quoteChar
    *  用户自定义引用字符
    *
    * @return string|null
    */
    public function getQuoteChar()
    {
        return $this->container['quoteChar'];
    }

    /**
    * Sets quoteChar
    *
    * @param string|null $quoteChar 用户自定义引用字符
    *
    * @return $this
    */
    public function setQuoteChar($quoteChar)
    {
        $this->container['quoteChar'] = $quoteChar;
        return $this;
    }

    /**
    * Gets escapeChar
    *  用户自定义转义字符
    *
    * @return string|null
    */
    public function getEscapeChar()
    {
        return $this->container['escapeChar'];
    }

    /**
    * Sets escapeChar
    *
    * @param string|null $escapeChar 用户自定义转义字符
    *
    * @return $this
    */
    public function setEscapeChar($escapeChar)
    {
        $this->container['escapeChar'] = $escapeChar;
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

