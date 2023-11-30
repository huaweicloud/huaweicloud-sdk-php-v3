<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReleaseReqBodyParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReleaseReqBodyParams';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dryRun  开启后，仅验证模板参数，不进行安装
    * nameTemplate  实例名称模板
    * noHooks  安装时是否禁用hooks
    * replace  是否替换同名实例
    * recreate  是否重建实例
    * resetValues  更新时是否重置values
    * releaseVersion  回滚实例的版本
    * includeHooks  更新或者删除时启用hooks
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dryRun' => 'bool',
            'nameTemplate' => 'string',
            'noHooks' => 'bool',
            'replace' => 'bool',
            'recreate' => 'bool',
            'resetValues' => 'bool',
            'releaseVersion' => 'int',
            'includeHooks' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dryRun  开启后，仅验证模板参数，不进行安装
    * nameTemplate  实例名称模板
    * noHooks  安装时是否禁用hooks
    * replace  是否替换同名实例
    * recreate  是否重建实例
    * resetValues  更新时是否重置values
    * releaseVersion  回滚实例的版本
    * includeHooks  更新或者删除时启用hooks
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dryRun' => null,
        'nameTemplate' => null,
        'noHooks' => null,
        'replace' => null,
        'recreate' => null,
        'resetValues' => null,
        'releaseVersion' => 'int32',
        'includeHooks' => null
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
    * dryRun  开启后，仅验证模板参数，不进行安装
    * nameTemplate  实例名称模板
    * noHooks  安装时是否禁用hooks
    * replace  是否替换同名实例
    * recreate  是否重建实例
    * resetValues  更新时是否重置values
    * releaseVersion  回滚实例的版本
    * includeHooks  更新或者删除时启用hooks
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dryRun' => 'dry_run',
            'nameTemplate' => 'name_template',
            'noHooks' => 'no_hooks',
            'replace' => 'replace',
            'recreate' => 'recreate',
            'resetValues' => 'reset_values',
            'releaseVersion' => 'release_version',
            'includeHooks' => 'include_hooks'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dryRun  开启后，仅验证模板参数，不进行安装
    * nameTemplate  实例名称模板
    * noHooks  安装时是否禁用hooks
    * replace  是否替换同名实例
    * recreate  是否重建实例
    * resetValues  更新时是否重置values
    * releaseVersion  回滚实例的版本
    * includeHooks  更新或者删除时启用hooks
    *
    * @var string[]
    */
    protected static $setters = [
            'dryRun' => 'setDryRun',
            'nameTemplate' => 'setNameTemplate',
            'noHooks' => 'setNoHooks',
            'replace' => 'setReplace',
            'recreate' => 'setRecreate',
            'resetValues' => 'setResetValues',
            'releaseVersion' => 'setReleaseVersion',
            'includeHooks' => 'setIncludeHooks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dryRun  开启后，仅验证模板参数，不进行安装
    * nameTemplate  实例名称模板
    * noHooks  安装时是否禁用hooks
    * replace  是否替换同名实例
    * recreate  是否重建实例
    * resetValues  更新时是否重置values
    * releaseVersion  回滚实例的版本
    * includeHooks  更新或者删除时启用hooks
    *
    * @var string[]
    */
    protected static $getters = [
            'dryRun' => 'getDryRun',
            'nameTemplate' => 'getNameTemplate',
            'noHooks' => 'getNoHooks',
            'replace' => 'getReplace',
            'recreate' => 'getRecreate',
            'resetValues' => 'getResetValues',
            'releaseVersion' => 'getReleaseVersion',
            'includeHooks' => 'getIncludeHooks'
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
        $this->container['dryRun'] = isset($data['dryRun']) ? $data['dryRun'] : null;
        $this->container['nameTemplate'] = isset($data['nameTemplate']) ? $data['nameTemplate'] : null;
        $this->container['noHooks'] = isset($data['noHooks']) ? $data['noHooks'] : null;
        $this->container['replace'] = isset($data['replace']) ? $data['replace'] : null;
        $this->container['recreate'] = isset($data['recreate']) ? $data['recreate'] : null;
        $this->container['resetValues'] = isset($data['resetValues']) ? $data['resetValues'] : null;
        $this->container['releaseVersion'] = isset($data['releaseVersion']) ? $data['releaseVersion'] : null;
        $this->container['includeHooks'] = isset($data['includeHooks']) ? $data['includeHooks'] : null;
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
    * Gets dryRun
    *  开启后，仅验证模板参数，不进行安装
    *
    * @return bool|null
    */
    public function getDryRun()
    {
        return $this->container['dryRun'];
    }

    /**
    * Sets dryRun
    *
    * @param bool|null $dryRun 开启后，仅验证模板参数，不进行安装
    *
    * @return $this
    */
    public function setDryRun($dryRun)
    {
        $this->container['dryRun'] = $dryRun;
        return $this;
    }

    /**
    * Gets nameTemplate
    *  实例名称模板
    *
    * @return string|null
    */
    public function getNameTemplate()
    {
        return $this->container['nameTemplate'];
    }

    /**
    * Sets nameTemplate
    *
    * @param string|null $nameTemplate 实例名称模板
    *
    * @return $this
    */
    public function setNameTemplate($nameTemplate)
    {
        $this->container['nameTemplate'] = $nameTemplate;
        return $this;
    }

    /**
    * Gets noHooks
    *  安装时是否禁用hooks
    *
    * @return bool|null
    */
    public function getNoHooks()
    {
        return $this->container['noHooks'];
    }

    /**
    * Sets noHooks
    *
    * @param bool|null $noHooks 安装时是否禁用hooks
    *
    * @return $this
    */
    public function setNoHooks($noHooks)
    {
        $this->container['noHooks'] = $noHooks;
        return $this;
    }

    /**
    * Gets replace
    *  是否替换同名实例
    *
    * @return bool|null
    */
    public function getReplace()
    {
        return $this->container['replace'];
    }

    /**
    * Sets replace
    *
    * @param bool|null $replace 是否替换同名实例
    *
    * @return $this
    */
    public function setReplace($replace)
    {
        $this->container['replace'] = $replace;
        return $this;
    }

    /**
    * Gets recreate
    *  是否重建实例
    *
    * @return bool|null
    */
    public function getRecreate()
    {
        return $this->container['recreate'];
    }

    /**
    * Sets recreate
    *
    * @param bool|null $recreate 是否重建实例
    *
    * @return $this
    */
    public function setRecreate($recreate)
    {
        $this->container['recreate'] = $recreate;
        return $this;
    }

    /**
    * Gets resetValues
    *  更新时是否重置values
    *
    * @return bool|null
    */
    public function getResetValues()
    {
        return $this->container['resetValues'];
    }

    /**
    * Sets resetValues
    *
    * @param bool|null $resetValues 更新时是否重置values
    *
    * @return $this
    */
    public function setResetValues($resetValues)
    {
        $this->container['resetValues'] = $resetValues;
        return $this;
    }

    /**
    * Gets releaseVersion
    *  回滚实例的版本
    *
    * @return int|null
    */
    public function getReleaseVersion()
    {
        return $this->container['releaseVersion'];
    }

    /**
    * Sets releaseVersion
    *
    * @param int|null $releaseVersion 回滚实例的版本
    *
    * @return $this
    */
    public function setReleaseVersion($releaseVersion)
    {
        $this->container['releaseVersion'] = $releaseVersion;
        return $this;
    }

    /**
    * Gets includeHooks
    *  更新或者删除时启用hooks
    *
    * @return bool|null
    */
    public function getIncludeHooks()
    {
        return $this->container['includeHooks'];
    }

    /**
    * Sets includeHooks
    *
    * @param bool|null $includeHooks 更新或者删除时启用hooks
    *
    * @return $this
    */
    public function setIncludeHooks($includeHooks)
    {
        $this->container['includeHooks'] = $includeHooks;
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

