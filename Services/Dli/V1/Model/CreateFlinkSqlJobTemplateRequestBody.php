<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateFlinkSqlJobTemplateRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateFlinkSqlJobTemplateRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  模块名称，长度限制：0-57个字符 。
    * desc  模板描述，长度限制：0-2048个字符。
    * sqlBody  Stream SQL语句，至少包含source，query，sink三个部分, 长度限制：0-2048个字符。
    * tags  标签
    * jobType  作业模板的类型，默认为flink_sql_job，仅支持flink_sql_job和flink_opensource_sql_job
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'desc' => 'string',
            'sqlBody' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dli\V1\Model\Tag[]',
            'jobType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  模块名称，长度限制：0-57个字符 。
    * desc  模板描述，长度限制：0-2048个字符。
    * sqlBody  Stream SQL语句，至少包含source，query，sink三个部分, 长度限制：0-2048个字符。
    * tags  标签
    * jobType  作业模板的类型，默认为flink_sql_job，仅支持flink_sql_job和flink_opensource_sql_job
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'desc' => null,
        'sqlBody' => null,
        'tags' => null,
        'jobType' => null
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
    * name  模块名称，长度限制：0-57个字符 。
    * desc  模板描述，长度限制：0-2048个字符。
    * sqlBody  Stream SQL语句，至少包含source，query，sink三个部分, 长度限制：0-2048个字符。
    * tags  标签
    * jobType  作业模板的类型，默认为flink_sql_job，仅支持flink_sql_job和flink_opensource_sql_job
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'desc' => 'desc',
            'sqlBody' => 'sql_body',
            'tags' => 'tags',
            'jobType' => 'job_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  模块名称，长度限制：0-57个字符 。
    * desc  模板描述，长度限制：0-2048个字符。
    * sqlBody  Stream SQL语句，至少包含source，query，sink三个部分, 长度限制：0-2048个字符。
    * tags  标签
    * jobType  作业模板的类型，默认为flink_sql_job，仅支持flink_sql_job和flink_opensource_sql_job
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'desc' => 'setDesc',
            'sqlBody' => 'setSqlBody',
            'tags' => 'setTags',
            'jobType' => 'setJobType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  模块名称，长度限制：0-57个字符 。
    * desc  模板描述，长度限制：0-2048个字符。
    * sqlBody  Stream SQL语句，至少包含source，query，sink三个部分, 长度限制：0-2048个字符。
    * tags  标签
    * jobType  作业模板的类型，默认为flink_sql_job，仅支持flink_sql_job和flink_opensource_sql_job
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'desc' => 'getDesc',
            'sqlBody' => 'getSqlBody',
            'tags' => 'getTags',
            'jobType' => 'getJobType'
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
    const JOB_TYPE_FLINK_SQL_JOB = 'flink_sql_job';
    const JOB_TYPE_FLINK_OPENSOURCE_SQL_JOB = 'flink_opensource_sql_job';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobTypeAllowableValues()
    {
        return [
            self::JOB_TYPE_FLINK_SQL_JOB,
            self::JOB_TYPE_FLINK_OPENSOURCE_SQL_JOB,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['sqlBody'] = isset($data['sqlBody']) ? $data['sqlBody'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 57)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 57.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) > 2048)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) < 0)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getJobTypeAllowableValues();
                if (!is_null($this->container['jobType']) && !in_array($this->container['jobType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobType', must be one of '%s'",
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
    * Gets name
    *  模块名称，长度限制：0-57个字符 。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 模块名称，长度限制：0-57个字符 。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets desc
    *  模板描述，长度限制：0-2048个字符。
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc 模板描述，长度限制：0-2048个字符。
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets sqlBody
    *  Stream SQL语句，至少包含source，query，sink三个部分, 长度限制：0-2048个字符。
    *
    * @return string|null
    */
    public function getSqlBody()
    {
        return $this->container['sqlBody'];
    }

    /**
    * Sets sqlBody
    *
    * @param string|null $sqlBody Stream SQL语句，至少包含source，query，sink三个部分, 长度限制：0-2048个字符。
    *
    * @return $this
    */
    public function setSqlBody($sqlBody)
    {
        $this->container['sqlBody'] = $sqlBody;
        return $this;
    }

    /**
    * Gets tags
    *  标签
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\Tag[]|null $tags 标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets jobType
    *  作业模板的类型，默认为flink_sql_job，仅支持flink_sql_job和flink_opensource_sql_job
    *
    * @return string|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string|null $jobType 作业模板的类型，默认为flink_sql_job，仅支持flink_sql_job和flink_opensource_sql_job
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
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

