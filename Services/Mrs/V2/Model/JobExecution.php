<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobExecution implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobExecution';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobType  作业类型: - MapReduce - SparkSubmit - SparkPython：该类型作业将转换为SparkSubmit类型提交，MRS控制台界面的作业类型展示为SparkSubmit，通过接口查询作业列表信息时作业类型请选择SparkSubmit。 - HiveScript - HiveSql - DistCp，导入、导出数据。 - SparkScript - SparkSql - Flink
    * jobName  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。 说明： 不同作业的名称允许相同，但不建议设置相同。
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$!\\\"\\特殊字符，可为空。 说明： - 若输入带有敏感信息（如登录密码）的参数可能在作业详情展示和日志打印中存在暴露的风险，请谨慎操作。 - 提交HiveScript或HiveSql类型的作业时如需以“obs://”开头格式访问存储在OBS上的文件，请在Hive服务配置页面搜索参数“core.site.customized.configs”，新增OBS的endpoint配置项，参数为“fs.obs.endpoint”，值请输入OBS对应的endpoint，具体请参考[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    * properties  程序系统参数。 最多为2048字符，不能包含><|'`&!\\特殊字符，可为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobType' => 'string',
            'jobName' => 'string',
            'arguments' => 'string[]',
            'properties' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobType  作业类型: - MapReduce - SparkSubmit - SparkPython：该类型作业将转换为SparkSubmit类型提交，MRS控制台界面的作业类型展示为SparkSubmit，通过接口查询作业列表信息时作业类型请选择SparkSubmit。 - HiveScript - HiveSql - DistCp，导入、导出数据。 - SparkScript - SparkSql - Flink
    * jobName  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。 说明： 不同作业的名称允许相同，但不建议设置相同。
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$!\\\"\\特殊字符，可为空。 说明： - 若输入带有敏感信息（如登录密码）的参数可能在作业详情展示和日志打印中存在暴露的风险，请谨慎操作。 - 提交HiveScript或HiveSql类型的作业时如需以“obs://”开头格式访问存储在OBS上的文件，请在Hive服务配置页面搜索参数“core.site.customized.configs”，新增OBS的endpoint配置项，参数为“fs.obs.endpoint”，值请输入OBS对应的endpoint，具体请参考[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    * properties  程序系统参数。 最多为2048字符，不能包含><|'`&!\\特殊字符，可为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobType' => null,
        'jobName' => null,
        'arguments' => null,
        'properties' => null
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
    * jobType  作业类型: - MapReduce - SparkSubmit - SparkPython：该类型作业将转换为SparkSubmit类型提交，MRS控制台界面的作业类型展示为SparkSubmit，通过接口查询作业列表信息时作业类型请选择SparkSubmit。 - HiveScript - HiveSql - DistCp，导入、导出数据。 - SparkScript - SparkSql - Flink
    * jobName  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。 说明： 不同作业的名称允许相同，但不建议设置相同。
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$!\\\"\\特殊字符，可为空。 说明： - 若输入带有敏感信息（如登录密码）的参数可能在作业详情展示和日志打印中存在暴露的风险，请谨慎操作。 - 提交HiveScript或HiveSql类型的作业时如需以“obs://”开头格式访问存储在OBS上的文件，请在Hive服务配置页面搜索参数“core.site.customized.configs”，新增OBS的endpoint配置项，参数为“fs.obs.endpoint”，值请输入OBS对应的endpoint，具体请参考[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    * properties  程序系统参数。 最多为2048字符，不能包含><|'`&!\\特殊字符，可为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobType' => 'job_type',
            'jobName' => 'job_name',
            'arguments' => 'arguments',
            'properties' => 'properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobType  作业类型: - MapReduce - SparkSubmit - SparkPython：该类型作业将转换为SparkSubmit类型提交，MRS控制台界面的作业类型展示为SparkSubmit，通过接口查询作业列表信息时作业类型请选择SparkSubmit。 - HiveScript - HiveSql - DistCp，导入、导出数据。 - SparkScript - SparkSql - Flink
    * jobName  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。 说明： 不同作业的名称允许相同，但不建议设置相同。
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$!\\\"\\特殊字符，可为空。 说明： - 若输入带有敏感信息（如登录密码）的参数可能在作业详情展示和日志打印中存在暴露的风险，请谨慎操作。 - 提交HiveScript或HiveSql类型的作业时如需以“obs://”开头格式访问存储在OBS上的文件，请在Hive服务配置页面搜索参数“core.site.customized.configs”，新增OBS的endpoint配置项，参数为“fs.obs.endpoint”，值请输入OBS对应的endpoint，具体请参考[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    * properties  程序系统参数。 最多为2048字符，不能包含><|'`&!\\特殊字符，可为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobType' => 'setJobType',
            'jobName' => 'setJobName',
            'arguments' => 'setArguments',
            'properties' => 'setProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobType  作业类型: - MapReduce - SparkSubmit - SparkPython：该类型作业将转换为SparkSubmit类型提交，MRS控制台界面的作业类型展示为SparkSubmit，通过接口查询作业列表信息时作业类型请选择SparkSubmit。 - HiveScript - HiveSql - DistCp，导入、导出数据。 - SparkScript - SparkSql - Flink
    * jobName  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。 说明： 不同作业的名称允许相同，但不建议设置相同。
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$!\\\"\\特殊字符，可为空。 说明： - 若输入带有敏感信息（如登录密码）的参数可能在作业详情展示和日志打印中存在暴露的风险，请谨慎操作。 - 提交HiveScript或HiveSql类型的作业时如需以“obs://”开头格式访问存储在OBS上的文件，请在Hive服务配置页面搜索参数“core.site.customized.configs”，新增OBS的endpoint配置项，参数为“fs.obs.endpoint”，值请输入OBS对应的endpoint，具体请参考[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    * properties  程序系统参数。 最多为2048字符，不能包含><|'`&!\\特殊字符，可为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobType' => 'getJobType',
            'jobName' => 'getJobName',
            'arguments' => 'getArguments',
            'properties' => 'getProperties'
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
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['arguments'] = isset($data['arguments']) ? $data['arguments'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobType'] === null) {
            $invalidProperties[] = "'jobType' can't be null";
        }
        if ($this->container['jobName'] === null) {
            $invalidProperties[] = "'jobName' can't be null";
        }
            if ((mb_strlen($this->container['jobName']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['jobName']) < 1)) {
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
    * Gets jobType
    *  作业类型: - MapReduce - SparkSubmit - SparkPython：该类型作业将转换为SparkSubmit类型提交，MRS控制台界面的作业类型展示为SparkSubmit，通过接口查询作业列表信息时作业类型请选择SparkSubmit。 - HiveScript - HiveSql - DistCp，导入、导出数据。 - SparkScript - SparkSql - Flink
    *
    * @return string
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string $jobType 作业类型: - MapReduce - SparkSubmit - SparkPython：该类型作业将转换为SparkSubmit类型提交，MRS控制台界面的作业类型展示为SparkSubmit，通过接口查询作业列表信息时作业类型请选择SparkSubmit。 - HiveScript - HiveSql - DistCp，导入、导出数据。 - SparkScript - SparkSql - Flink
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets jobName
    *  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。 说明： 不同作业的名称允许相同，但不建议设置相同。
    *
    * @return string
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string $jobName 作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。 说明： 不同作业的名称允许相同，但不建议设置相同。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets arguments
    *  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$!\\\"\\特殊字符，可为空。 说明： - 若输入带有敏感信息（如登录密码）的参数可能在作业详情展示和日志打印中存在暴露的风险，请谨慎操作。 - 提交HiveScript或HiveSql类型的作业时如需以“obs://”开头格式访问存储在OBS上的文件，请在Hive服务配置页面搜索参数“core.site.customized.configs”，新增OBS的endpoint配置项，参数为“fs.obs.endpoint”，值请输入OBS对应的endpoint，具体请参考[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    *
    * @return string[]|null
    */
    public function getArguments()
    {
        return $this->container['arguments'];
    }

    /**
    * Sets arguments
    *
    * @param string[]|null $arguments 程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$!\\\"\\特殊字符，可为空。 说明： - 若输入带有敏感信息（如登录密码）的参数可能在作业详情展示和日志打印中存在暴露的风险，请谨慎操作。 - 提交HiveScript或HiveSql类型的作业时如需以“obs://”开头格式访问存储在OBS上的文件，请在Hive服务配置页面搜索参数“core.site.customized.configs”，新增OBS的endpoint配置项，参数为“fs.obs.endpoint”，值请输入OBS对应的endpoint，具体请参考[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    *
    * @return $this
    */
    public function setArguments($arguments)
    {
        $this->container['arguments'] = $arguments;
        return $this;
    }

    /**
    * Gets properties
    *  程序系统参数。 最多为2048字符，不能包含><|'`&!\\特殊字符，可为空。
    *
    * @return map[string,string]|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param map[string,string]|null $properties 程序系统参数。 最多为2048字符，不能包含><|'`&!\\特殊字符，可为空。
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
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

