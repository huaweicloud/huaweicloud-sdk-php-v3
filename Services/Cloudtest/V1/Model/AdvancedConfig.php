<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AdvancedConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AdvancedConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * blockEnable  分块开关 1:打开 0：关闭，默认：打开
    * caseTimeout  用例超时时间
    * enableCookie  httpClient报存cookie配置：1 保存 0 不保存
    * headerDefault  关闭默认添加content-type和accept请求头配置：1 打开 0 关闭
    * httpTimeout  http请求超时时间
    * octopusImage  八爪鱼镜像地址
    * parallelNumber  并行用例个数
    * proxyAuthName  代理用户名
    * proxyAuthPassword  代理密码
    * proxyHostName  代理服务配置
    * proxyPort  代理服务配置
    * serialRun  串行配置
    * taskStopTime  任务停止时间
    * taskTimeout  任务超时时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'blockEnable' => 'string',
            'caseTimeout' => 'int',
            'enableCookie' => 'string',
            'headerDefault' => 'string',
            'httpTimeout' => 'int',
            'octopusImage' => 'string',
            'parallelNumber' => 'int',
            'proxyAuthName' => 'string',
            'proxyAuthPassword' => 'string',
            'proxyHostName' => 'string',
            'proxyPort' => 'string',
            'serialRun' => 'string',
            'taskStopTime' => '\DateTime',
            'taskTimeout' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * blockEnable  分块开关 1:打开 0：关闭，默认：打开
    * caseTimeout  用例超时时间
    * enableCookie  httpClient报存cookie配置：1 保存 0 不保存
    * headerDefault  关闭默认添加content-type和accept请求头配置：1 打开 0 关闭
    * httpTimeout  http请求超时时间
    * octopusImage  八爪鱼镜像地址
    * parallelNumber  并行用例个数
    * proxyAuthName  代理用户名
    * proxyAuthPassword  代理密码
    * proxyHostName  代理服务配置
    * proxyPort  代理服务配置
    * serialRun  串行配置
    * taskStopTime  任务停止时间
    * taskTimeout  任务超时时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'blockEnable' => null,
        'caseTimeout' => 'int64',
        'enableCookie' => null,
        'headerDefault' => null,
        'httpTimeout' => 'int64',
        'octopusImage' => null,
        'parallelNumber' => 'int32',
        'proxyAuthName' => null,
        'proxyAuthPassword' => null,
        'proxyHostName' => null,
        'proxyPort' => null,
        'serialRun' => null,
        'taskStopTime' => 'date-time',
        'taskTimeout' => 'int64'
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
    * blockEnable  分块开关 1:打开 0：关闭，默认：打开
    * caseTimeout  用例超时时间
    * enableCookie  httpClient报存cookie配置：1 保存 0 不保存
    * headerDefault  关闭默认添加content-type和accept请求头配置：1 打开 0 关闭
    * httpTimeout  http请求超时时间
    * octopusImage  八爪鱼镜像地址
    * parallelNumber  并行用例个数
    * proxyAuthName  代理用户名
    * proxyAuthPassword  代理密码
    * proxyHostName  代理服务配置
    * proxyPort  代理服务配置
    * serialRun  串行配置
    * taskStopTime  任务停止时间
    * taskTimeout  任务超时时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'blockEnable' => 'blockEnable',
            'caseTimeout' => 'caseTimeout',
            'enableCookie' => 'enableCookie',
            'headerDefault' => 'headerDefault',
            'httpTimeout' => 'httpTimeout',
            'octopusImage' => 'octopusImage',
            'parallelNumber' => 'parallelNumber',
            'proxyAuthName' => 'proxyAuthName',
            'proxyAuthPassword' => 'proxyAuthPassword',
            'proxyHostName' => 'proxyHostName',
            'proxyPort' => 'proxyPort',
            'serialRun' => 'serialRun',
            'taskStopTime' => 'taskStopTime',
            'taskTimeout' => 'taskTimeout'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * blockEnable  分块开关 1:打开 0：关闭，默认：打开
    * caseTimeout  用例超时时间
    * enableCookie  httpClient报存cookie配置：1 保存 0 不保存
    * headerDefault  关闭默认添加content-type和accept请求头配置：1 打开 0 关闭
    * httpTimeout  http请求超时时间
    * octopusImage  八爪鱼镜像地址
    * parallelNumber  并行用例个数
    * proxyAuthName  代理用户名
    * proxyAuthPassword  代理密码
    * proxyHostName  代理服务配置
    * proxyPort  代理服务配置
    * serialRun  串行配置
    * taskStopTime  任务停止时间
    * taskTimeout  任务超时时间
    *
    * @var string[]
    */
    protected static $setters = [
            'blockEnable' => 'setBlockEnable',
            'caseTimeout' => 'setCaseTimeout',
            'enableCookie' => 'setEnableCookie',
            'headerDefault' => 'setHeaderDefault',
            'httpTimeout' => 'setHttpTimeout',
            'octopusImage' => 'setOctopusImage',
            'parallelNumber' => 'setParallelNumber',
            'proxyAuthName' => 'setProxyAuthName',
            'proxyAuthPassword' => 'setProxyAuthPassword',
            'proxyHostName' => 'setProxyHostName',
            'proxyPort' => 'setProxyPort',
            'serialRun' => 'setSerialRun',
            'taskStopTime' => 'setTaskStopTime',
            'taskTimeout' => 'setTaskTimeout'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * blockEnable  分块开关 1:打开 0：关闭，默认：打开
    * caseTimeout  用例超时时间
    * enableCookie  httpClient报存cookie配置：1 保存 0 不保存
    * headerDefault  关闭默认添加content-type和accept请求头配置：1 打开 0 关闭
    * httpTimeout  http请求超时时间
    * octopusImage  八爪鱼镜像地址
    * parallelNumber  并行用例个数
    * proxyAuthName  代理用户名
    * proxyAuthPassword  代理密码
    * proxyHostName  代理服务配置
    * proxyPort  代理服务配置
    * serialRun  串行配置
    * taskStopTime  任务停止时间
    * taskTimeout  任务超时时间
    *
    * @var string[]
    */
    protected static $getters = [
            'blockEnable' => 'getBlockEnable',
            'caseTimeout' => 'getCaseTimeout',
            'enableCookie' => 'getEnableCookie',
            'headerDefault' => 'getHeaderDefault',
            'httpTimeout' => 'getHttpTimeout',
            'octopusImage' => 'getOctopusImage',
            'parallelNumber' => 'getParallelNumber',
            'proxyAuthName' => 'getProxyAuthName',
            'proxyAuthPassword' => 'getProxyAuthPassword',
            'proxyHostName' => 'getProxyHostName',
            'proxyPort' => 'getProxyPort',
            'serialRun' => 'getSerialRun',
            'taskStopTime' => 'getTaskStopTime',
            'taskTimeout' => 'getTaskTimeout'
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
        $this->container['blockEnable'] = isset($data['blockEnable']) ? $data['blockEnable'] : null;
        $this->container['caseTimeout'] = isset($data['caseTimeout']) ? $data['caseTimeout'] : null;
        $this->container['enableCookie'] = isset($data['enableCookie']) ? $data['enableCookie'] : null;
        $this->container['headerDefault'] = isset($data['headerDefault']) ? $data['headerDefault'] : null;
        $this->container['httpTimeout'] = isset($data['httpTimeout']) ? $data['httpTimeout'] : null;
        $this->container['octopusImage'] = isset($data['octopusImage']) ? $data['octopusImage'] : null;
        $this->container['parallelNumber'] = isset($data['parallelNumber']) ? $data['parallelNumber'] : null;
        $this->container['proxyAuthName'] = isset($data['proxyAuthName']) ? $data['proxyAuthName'] : null;
        $this->container['proxyAuthPassword'] = isset($data['proxyAuthPassword']) ? $data['proxyAuthPassword'] : null;
        $this->container['proxyHostName'] = isset($data['proxyHostName']) ? $data['proxyHostName'] : null;
        $this->container['proxyPort'] = isset($data['proxyPort']) ? $data['proxyPort'] : null;
        $this->container['serialRun'] = isset($data['serialRun']) ? $data['serialRun'] : null;
        $this->container['taskStopTime'] = isset($data['taskStopTime']) ? $data['taskStopTime'] : null;
        $this->container['taskTimeout'] = isset($data['taskTimeout']) ? $data['taskTimeout'] : null;
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
    * Gets blockEnable
    *  分块开关 1:打开 0：关闭，默认：打开
    *
    * @return string|null
    */
    public function getBlockEnable()
    {
        return $this->container['blockEnable'];
    }

    /**
    * Sets blockEnable
    *
    * @param string|null $blockEnable 分块开关 1:打开 0：关闭，默认：打开
    *
    * @return $this
    */
    public function setBlockEnable($blockEnable)
    {
        $this->container['blockEnable'] = $blockEnable;
        return $this;
    }

    /**
    * Gets caseTimeout
    *  用例超时时间
    *
    * @return int|null
    */
    public function getCaseTimeout()
    {
        return $this->container['caseTimeout'];
    }

    /**
    * Sets caseTimeout
    *
    * @param int|null $caseTimeout 用例超时时间
    *
    * @return $this
    */
    public function setCaseTimeout($caseTimeout)
    {
        $this->container['caseTimeout'] = $caseTimeout;
        return $this;
    }

    /**
    * Gets enableCookie
    *  httpClient报存cookie配置：1 保存 0 不保存
    *
    * @return string|null
    */
    public function getEnableCookie()
    {
        return $this->container['enableCookie'];
    }

    /**
    * Sets enableCookie
    *
    * @param string|null $enableCookie httpClient报存cookie配置：1 保存 0 不保存
    *
    * @return $this
    */
    public function setEnableCookie($enableCookie)
    {
        $this->container['enableCookie'] = $enableCookie;
        return $this;
    }

    /**
    * Gets headerDefault
    *  关闭默认添加content-type和accept请求头配置：1 打开 0 关闭
    *
    * @return string|null
    */
    public function getHeaderDefault()
    {
        return $this->container['headerDefault'];
    }

    /**
    * Sets headerDefault
    *
    * @param string|null $headerDefault 关闭默认添加content-type和accept请求头配置：1 打开 0 关闭
    *
    * @return $this
    */
    public function setHeaderDefault($headerDefault)
    {
        $this->container['headerDefault'] = $headerDefault;
        return $this;
    }

    /**
    * Gets httpTimeout
    *  http请求超时时间
    *
    * @return int|null
    */
    public function getHttpTimeout()
    {
        return $this->container['httpTimeout'];
    }

    /**
    * Sets httpTimeout
    *
    * @param int|null $httpTimeout http请求超时时间
    *
    * @return $this
    */
    public function setHttpTimeout($httpTimeout)
    {
        $this->container['httpTimeout'] = $httpTimeout;
        return $this;
    }

    /**
    * Gets octopusImage
    *  八爪鱼镜像地址
    *
    * @return string|null
    */
    public function getOctopusImage()
    {
        return $this->container['octopusImage'];
    }

    /**
    * Sets octopusImage
    *
    * @param string|null $octopusImage 八爪鱼镜像地址
    *
    * @return $this
    */
    public function setOctopusImage($octopusImage)
    {
        $this->container['octopusImage'] = $octopusImage;
        return $this;
    }

    /**
    * Gets parallelNumber
    *  并行用例个数
    *
    * @return int|null
    */
    public function getParallelNumber()
    {
        return $this->container['parallelNumber'];
    }

    /**
    * Sets parallelNumber
    *
    * @param int|null $parallelNumber 并行用例个数
    *
    * @return $this
    */
    public function setParallelNumber($parallelNumber)
    {
        $this->container['parallelNumber'] = $parallelNumber;
        return $this;
    }

    /**
    * Gets proxyAuthName
    *  代理用户名
    *
    * @return string|null
    */
    public function getProxyAuthName()
    {
        return $this->container['proxyAuthName'];
    }

    /**
    * Sets proxyAuthName
    *
    * @param string|null $proxyAuthName 代理用户名
    *
    * @return $this
    */
    public function setProxyAuthName($proxyAuthName)
    {
        $this->container['proxyAuthName'] = $proxyAuthName;
        return $this;
    }

    /**
    * Gets proxyAuthPassword
    *  代理密码
    *
    * @return string|null
    */
    public function getProxyAuthPassword()
    {
        return $this->container['proxyAuthPassword'];
    }

    /**
    * Sets proxyAuthPassword
    *
    * @param string|null $proxyAuthPassword 代理密码
    *
    * @return $this
    */
    public function setProxyAuthPassword($proxyAuthPassword)
    {
        $this->container['proxyAuthPassword'] = $proxyAuthPassword;
        return $this;
    }

    /**
    * Gets proxyHostName
    *  代理服务配置
    *
    * @return string|null
    */
    public function getProxyHostName()
    {
        return $this->container['proxyHostName'];
    }

    /**
    * Sets proxyHostName
    *
    * @param string|null $proxyHostName 代理服务配置
    *
    * @return $this
    */
    public function setProxyHostName($proxyHostName)
    {
        $this->container['proxyHostName'] = $proxyHostName;
        return $this;
    }

    /**
    * Gets proxyPort
    *  代理服务配置
    *
    * @return string|null
    */
    public function getProxyPort()
    {
        return $this->container['proxyPort'];
    }

    /**
    * Sets proxyPort
    *
    * @param string|null $proxyPort 代理服务配置
    *
    * @return $this
    */
    public function setProxyPort($proxyPort)
    {
        $this->container['proxyPort'] = $proxyPort;
        return $this;
    }

    /**
    * Gets serialRun
    *  串行配置
    *
    * @return string|null
    */
    public function getSerialRun()
    {
        return $this->container['serialRun'];
    }

    /**
    * Sets serialRun
    *
    * @param string|null $serialRun 串行配置
    *
    * @return $this
    */
    public function setSerialRun($serialRun)
    {
        $this->container['serialRun'] = $serialRun;
        return $this;
    }

    /**
    * Gets taskStopTime
    *  任务停止时间
    *
    * @return \DateTime|null
    */
    public function getTaskStopTime()
    {
        return $this->container['taskStopTime'];
    }

    /**
    * Sets taskStopTime
    *
    * @param \DateTime|null $taskStopTime 任务停止时间
    *
    * @return $this
    */
    public function setTaskStopTime($taskStopTime)
    {
        $this->container['taskStopTime'] = $taskStopTime;
        return $this;
    }

    /**
    * Gets taskTimeout
    *  任务超时时间
    *
    * @return int|null
    */
    public function getTaskTimeout()
    {
        return $this->container['taskTimeout'];
    }

    /**
    * Sets taskTimeout
    *
    * @param int|null $taskTimeout 任务超时时间
    *
    * @return $this
    */
    public function setTaskTimeout($taskTimeout)
    {
        $this->container['taskTimeout'] = $taskTimeout;
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

