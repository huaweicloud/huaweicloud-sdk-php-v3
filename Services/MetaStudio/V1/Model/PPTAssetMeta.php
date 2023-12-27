<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PPTAssetMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PPTAssetMeta';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * autoAnalysis  PPT是否需要自动解析。
    * pptAnalysisStatus  PPT解析状态。 * INITIALIZE：初始 * WAITING：等待 * CONVERTING：解析中 * FAILED：失败 * SUCCEEDED：成功 * CANCELED：取消
    * errorInfo  errorInfo
    * pageCount  PPT页面总数。
    * pages  PPT页面图片。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'autoAnalysis' => 'bool',
            'pptAnalysisStatus' => 'string',
            'errorInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse',
            'pageCount' => 'int',
            'pages' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\PPTPageInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * autoAnalysis  PPT是否需要自动解析。
    * pptAnalysisStatus  PPT解析状态。 * INITIALIZE：初始 * WAITING：等待 * CONVERTING：解析中 * FAILED：失败 * SUCCEEDED：成功 * CANCELED：取消
    * errorInfo  errorInfo
    * pageCount  PPT页面总数。
    * pages  PPT页面图片。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'autoAnalysis' => null,
        'pptAnalysisStatus' => null,
        'errorInfo' => null,
        'pageCount' => null,
        'pages' => null
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
    * autoAnalysis  PPT是否需要自动解析。
    * pptAnalysisStatus  PPT解析状态。 * INITIALIZE：初始 * WAITING：等待 * CONVERTING：解析中 * FAILED：失败 * SUCCEEDED：成功 * CANCELED：取消
    * errorInfo  errorInfo
    * pageCount  PPT页面总数。
    * pages  PPT页面图片。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'autoAnalysis' => 'auto_analysis',
            'pptAnalysisStatus' => 'ppt_analysis_status',
            'errorInfo' => 'error_info',
            'pageCount' => 'page_count',
            'pages' => 'pages'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * autoAnalysis  PPT是否需要自动解析。
    * pptAnalysisStatus  PPT解析状态。 * INITIALIZE：初始 * WAITING：等待 * CONVERTING：解析中 * FAILED：失败 * SUCCEEDED：成功 * CANCELED：取消
    * errorInfo  errorInfo
    * pageCount  PPT页面总数。
    * pages  PPT页面图片。
    *
    * @var string[]
    */
    protected static $setters = [
            'autoAnalysis' => 'setAutoAnalysis',
            'pptAnalysisStatus' => 'setPptAnalysisStatus',
            'errorInfo' => 'setErrorInfo',
            'pageCount' => 'setPageCount',
            'pages' => 'setPages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * autoAnalysis  PPT是否需要自动解析。
    * pptAnalysisStatus  PPT解析状态。 * INITIALIZE：初始 * WAITING：等待 * CONVERTING：解析中 * FAILED：失败 * SUCCEEDED：成功 * CANCELED：取消
    * errorInfo  errorInfo
    * pageCount  PPT页面总数。
    * pages  PPT页面图片。
    *
    * @var string[]
    */
    protected static $getters = [
            'autoAnalysis' => 'getAutoAnalysis',
            'pptAnalysisStatus' => 'getPptAnalysisStatus',
            'errorInfo' => 'getErrorInfo',
            'pageCount' => 'getPageCount',
            'pages' => 'getPages'
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
    const PPT_ANALYSIS_STATUS_INITIALIZE = 'INITIALIZE';
    const PPT_ANALYSIS_STATUS_WAITING = 'WAITING';
    const PPT_ANALYSIS_STATUS_CONVERTING = 'CONVERTING';
    const PPT_ANALYSIS_STATUS_FAILED = 'FAILED';
    const PPT_ANALYSIS_STATUS_SUCCEEDED = 'SUCCEEDED';
    const PPT_ANALYSIS_STATUS_CANCELED = 'CANCELED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPptAnalysisStatusAllowableValues()
    {
        return [
            self::PPT_ANALYSIS_STATUS_INITIALIZE,
            self::PPT_ANALYSIS_STATUS_WAITING,
            self::PPT_ANALYSIS_STATUS_CONVERTING,
            self::PPT_ANALYSIS_STATUS_FAILED,
            self::PPT_ANALYSIS_STATUS_SUCCEEDED,
            self::PPT_ANALYSIS_STATUS_CANCELED,
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
        $this->container['autoAnalysis'] = isset($data['autoAnalysis']) ? $data['autoAnalysis'] : null;
        $this->container['pptAnalysisStatus'] = isset($data['pptAnalysisStatus']) ? $data['pptAnalysisStatus'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
        $this->container['pageCount'] = isset($data['pageCount']) ? $data['pageCount'] : null;
        $this->container['pages'] = isset($data['pages']) ? $data['pages'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPptAnalysisStatusAllowableValues();
                if (!is_null($this->container['pptAnalysisStatus']) && !in_array($this->container['pptAnalysisStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'pptAnalysisStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['pptAnalysisStatus']) && (mb_strlen($this->container['pptAnalysisStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'pptAnalysisStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['pptAnalysisStatus']) && (mb_strlen($this->container['pptAnalysisStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'pptAnalysisStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pageCount']) && ($this->container['pageCount'] > 256)) {
                $invalidProperties[] = "invalid value for 'pageCount', must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['pageCount']) && ($this->container['pageCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'pageCount', must be bigger than or equal to 0.";
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
    * Gets autoAnalysis
    *  PPT是否需要自动解析。
    *
    * @return bool|null
    */
    public function getAutoAnalysis()
    {
        return $this->container['autoAnalysis'];
    }

    /**
    * Sets autoAnalysis
    *
    * @param bool|null $autoAnalysis PPT是否需要自动解析。
    *
    * @return $this
    */
    public function setAutoAnalysis($autoAnalysis)
    {
        $this->container['autoAnalysis'] = $autoAnalysis;
        return $this;
    }

    /**
    * Gets pptAnalysisStatus
    *  PPT解析状态。 * INITIALIZE：初始 * WAITING：等待 * CONVERTING：解析中 * FAILED：失败 * SUCCEEDED：成功 * CANCELED：取消
    *
    * @return string|null
    */
    public function getPptAnalysisStatus()
    {
        return $this->container['pptAnalysisStatus'];
    }

    /**
    * Sets pptAnalysisStatus
    *
    * @param string|null $pptAnalysisStatus PPT解析状态。 * INITIALIZE：初始 * WAITING：等待 * CONVERTING：解析中 * FAILED：失败 * SUCCEEDED：成功 * CANCELED：取消
    *
    * @return $this
    */
    public function setPptAnalysisStatus($pptAnalysisStatus)
    {
        $this->container['pptAnalysisStatus'] = $pptAnalysisStatus;
        return $this;
    }

    /**
    * Gets errorInfo
    *  errorInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse|null
    */
    public function getErrorInfo()
    {
        return $this->container['errorInfo'];
    }

    /**
    * Sets errorInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse|null $errorInfo errorInfo
    *
    * @return $this
    */
    public function setErrorInfo($errorInfo)
    {
        $this->container['errorInfo'] = $errorInfo;
        return $this;
    }

    /**
    * Gets pageCount
    *  PPT页面总数。
    *
    * @return int|null
    */
    public function getPageCount()
    {
        return $this->container['pageCount'];
    }

    /**
    * Sets pageCount
    *
    * @param int|null $pageCount PPT页面总数。
    *
    * @return $this
    */
    public function setPageCount($pageCount)
    {
        $this->container['pageCount'] = $pageCount;
        return $this;
    }

    /**
    * Gets pages
    *  PPT页面图片。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\PPTPageInfo[]|null
    */
    public function getPages()
    {
        return $this->container['pages'];
    }

    /**
    * Sets pages
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\PPTPageInfo[]|null $pages PPT页面图片。
    *
    * @return $this
    */
    public function setPages($pages)
    {
        $this->container['pages'] = $pages;
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

