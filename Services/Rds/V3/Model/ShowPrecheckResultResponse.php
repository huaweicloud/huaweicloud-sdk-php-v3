<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPrecheckResultResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPrecheckResultResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resultCode  检查是否通过，0代表通过，1代表未通过
    * status  检查状态
    * updatedAt  检查结果更新时间
    * display  是否展示数据库检查结果
    * instanceStatusCheckList  实例关联关系检查失败项
    * dbUpgradePrecheck  dbUpgradePrecheck
    * downloadLink  检查结果下载链接
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resultCode' => 'int',
            'status' => 'string',
            'updatedAt' => 'string',
            'display' => 'bool',
            'instanceStatusCheckList' => 'string[]',
            'dbUpgradePrecheck' => '\HuaweiCloud\SDK\Rds\V3\Model\DBUpgradePrecheck',
            'downloadLink' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resultCode  检查是否通过，0代表通过，1代表未通过
    * status  检查状态
    * updatedAt  检查结果更新时间
    * display  是否展示数据库检查结果
    * instanceStatusCheckList  实例关联关系检查失败项
    * dbUpgradePrecheck  dbUpgradePrecheck
    * downloadLink  检查结果下载链接
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resultCode' => null,
        'status' => null,
        'updatedAt' => null,
        'display' => null,
        'instanceStatusCheckList' => null,
        'dbUpgradePrecheck' => null,
        'downloadLink' => null,
        'xRequestId' => null
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
    * resultCode  检查是否通过，0代表通过，1代表未通过
    * status  检查状态
    * updatedAt  检查结果更新时间
    * display  是否展示数据库检查结果
    * instanceStatusCheckList  实例关联关系检查失败项
    * dbUpgradePrecheck  dbUpgradePrecheck
    * downloadLink  检查结果下载链接
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resultCode' => 'result_code',
            'status' => 'status',
            'updatedAt' => 'updated_at',
            'display' => 'display',
            'instanceStatusCheckList' => 'instance_status_check_list',
            'dbUpgradePrecheck' => 'db_upgrade_precheck',
            'downloadLink' => 'download_link',
            'xRequestId' => 'X-request-id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resultCode  检查是否通过，0代表通过，1代表未通过
    * status  检查状态
    * updatedAt  检查结果更新时间
    * display  是否展示数据库检查结果
    * instanceStatusCheckList  实例关联关系检查失败项
    * dbUpgradePrecheck  dbUpgradePrecheck
    * downloadLink  检查结果下载链接
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'resultCode' => 'setResultCode',
            'status' => 'setStatus',
            'updatedAt' => 'setUpdatedAt',
            'display' => 'setDisplay',
            'instanceStatusCheckList' => 'setInstanceStatusCheckList',
            'dbUpgradePrecheck' => 'setDbUpgradePrecheck',
            'downloadLink' => 'setDownloadLink',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resultCode  检查是否通过，0代表通过，1代表未通过
    * status  检查状态
    * updatedAt  检查结果更新时间
    * display  是否展示数据库检查结果
    * instanceStatusCheckList  实例关联关系检查失败项
    * dbUpgradePrecheck  dbUpgradePrecheck
    * downloadLink  检查结果下载链接
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'resultCode' => 'getResultCode',
            'status' => 'getStatus',
            'updatedAt' => 'getUpdatedAt',
            'display' => 'getDisplay',
            'instanceStatusCheckList' => 'getInstanceStatusCheckList',
            'dbUpgradePrecheck' => 'getDbUpgradePrecheck',
            'downloadLink' => 'getDownloadLink',
            'xRequestId' => 'getXRequestId'
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
        $this->container['resultCode'] = isset($data['resultCode']) ? $data['resultCode'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['display'] = isset($data['display']) ? $data['display'] : null;
        $this->container['instanceStatusCheckList'] = isset($data['instanceStatusCheckList']) ? $data['instanceStatusCheckList'] : null;
        $this->container['dbUpgradePrecheck'] = isset($data['dbUpgradePrecheck']) ? $data['dbUpgradePrecheck'] : null;
        $this->container['downloadLink'] = isset($data['downloadLink']) ? $data['downloadLink'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resultCode']) && ($this->container['resultCode'] > 1)) {
                $invalidProperties[] = "invalid value for 'resultCode', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['resultCode']) && ($this->container['resultCode'] < 0)) {
                $invalidProperties[] = "invalid value for 'resultCode', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 6)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 6.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) > 128)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['downloadLink']) && (mb_strlen($this->container['downloadLink']) > 2048)) {
                $invalidProperties[] = "invalid value for 'downloadLink', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['downloadLink']) && (mb_strlen($this->container['downloadLink']) < 1)) {
                $invalidProperties[] = "invalid value for 'downloadLink', the character length must be bigger than or equal to 1.";
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
    * Gets resultCode
    *  检查是否通过，0代表通过，1代表未通过
    *
    * @return int|null
    */
    public function getResultCode()
    {
        return $this->container['resultCode'];
    }

    /**
    * Sets resultCode
    *
    * @param int|null $resultCode 检查是否通过，0代表通过，1代表未通过
    *
    * @return $this
    */
    public function setResultCode($resultCode)
    {
        $this->container['resultCode'] = $resultCode;
        return $this;
    }

    /**
    * Gets status
    *  检查状态
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
    * @param string|null $status 检查状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets updatedAt
    *  检查结果更新时间
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 检查结果更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets display
    *  是否展示数据库检查结果
    *
    * @return bool|null
    */
    public function getDisplay()
    {
        return $this->container['display'];
    }

    /**
    * Sets display
    *
    * @param bool|null $display 是否展示数据库检查结果
    *
    * @return $this
    */
    public function setDisplay($display)
    {
        $this->container['display'] = $display;
        return $this;
    }

    /**
    * Gets instanceStatusCheckList
    *  实例关联关系检查失败项
    *
    * @return string[]|null
    */
    public function getInstanceStatusCheckList()
    {
        return $this->container['instanceStatusCheckList'];
    }

    /**
    * Sets instanceStatusCheckList
    *
    * @param string[]|null $instanceStatusCheckList 实例关联关系检查失败项
    *
    * @return $this
    */
    public function setInstanceStatusCheckList($instanceStatusCheckList)
    {
        $this->container['instanceStatusCheckList'] = $instanceStatusCheckList;
        return $this;
    }

    /**
    * Gets dbUpgradePrecheck
    *  dbUpgradePrecheck
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\DBUpgradePrecheck|null
    */
    public function getDbUpgradePrecheck()
    {
        return $this->container['dbUpgradePrecheck'];
    }

    /**
    * Sets dbUpgradePrecheck
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\DBUpgradePrecheck|null $dbUpgradePrecheck dbUpgradePrecheck
    *
    * @return $this
    */
    public function setDbUpgradePrecheck($dbUpgradePrecheck)
    {
        $this->container['dbUpgradePrecheck'] = $dbUpgradePrecheck;
        return $this;
    }

    /**
    * Gets downloadLink
    *  检查结果下载链接
    *
    * @return string|null
    */
    public function getDownloadLink()
    {
        return $this->container['downloadLink'];
    }

    /**
    * Sets downloadLink
    *
    * @param string|null $downloadLink 检查结果下载链接
    *
    * @return $this
    */
    public function setDownloadLink($downloadLink)
    {
        $this->container['downloadLink'] = $downloadLink;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

