<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeLifecycleConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeLifecycleConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * preInstall  **参数解释**： 安装前执行脚本。安装前/后执行脚本统一计算字符，输入的值需要经过Base64编码，方法如下： ``` echo -n \"待编码内容\" | base64 ```  **约束限制**： 长度不能超过10240字节。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * postInstall  **参数解释**： 安装前执行脚本。安装前/后执行脚本统一计算字符，输入的值需要经过Base64编码，方法如下： ``` echo -n \"待编码内容\" | base64 ```  **约束限制**： 长度不能超过10240字节。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * waitPostInstallFinish  **参数解释：** 该参数用于控制重置/纳管/批量重置节点时， **post-install脚本执行完成前允许节点调度** 的行为。当操作的节点属于节点池时，以节点池相关配置为准。当该参数未设置或者为false时，在kubernetes节点就绪时，容器即可被调度到可用节点。当该参数为true时，在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **约束限制：** 不涉及  **取值范围：** - false：在kubernetes节点就绪时，容器即可被调度到可用节点。           - true：在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **默认取值：** false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'preInstall' => 'string',
            'postInstall' => 'string',
            'waitPostInstallFinish' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * preInstall  **参数解释**： 安装前执行脚本。安装前/后执行脚本统一计算字符，输入的值需要经过Base64编码，方法如下： ``` echo -n \"待编码内容\" | base64 ```  **约束限制**： 长度不能超过10240字节。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * postInstall  **参数解释**： 安装前执行脚本。安装前/后执行脚本统一计算字符，输入的值需要经过Base64编码，方法如下： ``` echo -n \"待编码内容\" | base64 ```  **约束限制**： 长度不能超过10240字节。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * waitPostInstallFinish  **参数解释：** 该参数用于控制重置/纳管/批量重置节点时， **post-install脚本执行完成前允许节点调度** 的行为。当操作的节点属于节点池时，以节点池相关配置为准。当该参数未设置或者为false时，在kubernetes节点就绪时，容器即可被调度到可用节点。当该参数为true时，在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **约束限制：** 不涉及  **取值范围：** - false：在kubernetes节点就绪时，容器即可被调度到可用节点。           - true：在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **默认取值：** false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'preInstall' => null,
        'postInstall' => null,
        'waitPostInstallFinish' => null
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
    * preInstall  **参数解释**： 安装前执行脚本。安装前/后执行脚本统一计算字符，输入的值需要经过Base64编码，方法如下： ``` echo -n \"待编码内容\" | base64 ```  **约束限制**： 长度不能超过10240字节。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * postInstall  **参数解释**： 安装前执行脚本。安装前/后执行脚本统一计算字符，输入的值需要经过Base64编码，方法如下： ``` echo -n \"待编码内容\" | base64 ```  **约束限制**： 长度不能超过10240字节。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * waitPostInstallFinish  **参数解释：** 该参数用于控制重置/纳管/批量重置节点时， **post-install脚本执行完成前允许节点调度** 的行为。当操作的节点属于节点池时，以节点池相关配置为准。当该参数未设置或者为false时，在kubernetes节点就绪时，容器即可被调度到可用节点。当该参数为true时，在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **约束限制：** 不涉及  **取值范围：** - false：在kubernetes节点就绪时，容器即可被调度到可用节点。           - true：在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **默认取值：** false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'preInstall' => 'preInstall',
            'postInstall' => 'postInstall',
            'waitPostInstallFinish' => 'waitPostInstallFinish'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * preInstall  **参数解释**： 安装前执行脚本。安装前/后执行脚本统一计算字符，输入的值需要经过Base64编码，方法如下： ``` echo -n \"待编码内容\" | base64 ```  **约束限制**： 长度不能超过10240字节。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * postInstall  **参数解释**： 安装前执行脚本。安装前/后执行脚本统一计算字符，输入的值需要经过Base64编码，方法如下： ``` echo -n \"待编码内容\" | base64 ```  **约束限制**： 长度不能超过10240字节。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * waitPostInstallFinish  **参数解释：** 该参数用于控制重置/纳管/批量重置节点时， **post-install脚本执行完成前允许节点调度** 的行为。当操作的节点属于节点池时，以节点池相关配置为准。当该参数未设置或者为false时，在kubernetes节点就绪时，容器即可被调度到可用节点。当该参数为true时，在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **约束限制：** 不涉及  **取值范围：** - false：在kubernetes节点就绪时，容器即可被调度到可用节点。           - true：在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **默认取值：** false
    *
    * @var string[]
    */
    protected static $setters = [
            'preInstall' => 'setPreInstall',
            'postInstall' => 'setPostInstall',
            'waitPostInstallFinish' => 'setWaitPostInstallFinish'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * preInstall  **参数解释**： 安装前执行脚本。安装前/后执行脚本统一计算字符，输入的值需要经过Base64编码，方法如下： ``` echo -n \"待编码内容\" | base64 ```  **约束限制**： 长度不能超过10240字节。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * postInstall  **参数解释**： 安装前执行脚本。安装前/后执行脚本统一计算字符，输入的值需要经过Base64编码，方法如下： ``` echo -n \"待编码内容\" | base64 ```  **约束限制**： 长度不能超过10240字节。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * waitPostInstallFinish  **参数解释：** 该参数用于控制重置/纳管/批量重置节点时， **post-install脚本执行完成前允许节点调度** 的行为。当操作的节点属于节点池时，以节点池相关配置为准。当该参数未设置或者为false时，在kubernetes节点就绪时，容器即可被调度到可用节点。当该参数为true时，在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **约束限制：** 不涉及  **取值范围：** - false：在kubernetes节点就绪时，容器即可被调度到可用节点。           - true：在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **默认取值：** false
    *
    * @var string[]
    */
    protected static $getters = [
            'preInstall' => 'getPreInstall',
            'postInstall' => 'getPostInstall',
            'waitPostInstallFinish' => 'getWaitPostInstallFinish'
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
        $this->container['preInstall'] = isset($data['preInstall']) ? $data['preInstall'] : null;
        $this->container['postInstall'] = isset($data['postInstall']) ? $data['postInstall'] : null;
        $this->container['waitPostInstallFinish'] = isset($data['waitPostInstallFinish']) ? $data['waitPostInstallFinish'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['preInstall']) && (mb_strlen($this->container['preInstall']) > 10240)) {
                $invalidProperties[] = "invalid value for 'preInstall', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['postInstall']) && (mb_strlen($this->container['postInstall']) > 10240)) {
                $invalidProperties[] = "invalid value for 'postInstall', the character length must be smaller than or equal to 10240.";
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
    * Gets preInstall
    *  **参数解释**： 安装前执行脚本。安装前/后执行脚本统一计算字符，输入的值需要经过Base64编码，方法如下： ``` echo -n \"待编码内容\" | base64 ```  **约束限制**： 长度不能超过10240字节。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getPreInstall()
    {
        return $this->container['preInstall'];
    }

    /**
    * Sets preInstall
    *
    * @param string|null $preInstall **参数解释**： 安装前执行脚本。安装前/后执行脚本统一计算字符，输入的值需要经过Base64编码，方法如下： ``` echo -n \"待编码内容\" | base64 ```  **约束限制**： 长度不能超过10240字节。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setPreInstall($preInstall)
    {
        $this->container['preInstall'] = $preInstall;
        return $this;
    }

    /**
    * Gets postInstall
    *  **参数解释**： 安装前执行脚本。安装前/后执行脚本统一计算字符，输入的值需要经过Base64编码，方法如下： ``` echo -n \"待编码内容\" | base64 ```  **约束限制**： 长度不能超过10240字节。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getPostInstall()
    {
        return $this->container['postInstall'];
    }

    /**
    * Sets postInstall
    *
    * @param string|null $postInstall **参数解释**： 安装前执行脚本。安装前/后执行脚本统一计算字符，输入的值需要经过Base64编码，方法如下： ``` echo -n \"待编码内容\" | base64 ```  **约束限制**： 长度不能超过10240字节。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setPostInstall($postInstall)
    {
        $this->container['postInstall'] = $postInstall;
        return $this;
    }

    /**
    * Gets waitPostInstallFinish
    *  **参数解释：** 该参数用于控制重置/纳管/批量重置节点时， **post-install脚本执行完成前允许节点调度** 的行为。当操作的节点属于节点池时，以节点池相关配置为准。当该参数未设置或者为false时，在kubernetes节点就绪时，容器即可被调度到可用节点。当该参数为true时，在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **约束限制：** 不涉及  **取值范围：** - false：在kubernetes节点就绪时，容器即可被调度到可用节点。           - true：在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **默认取值：** false
    *
    * @return bool|null
    */
    public function getWaitPostInstallFinish()
    {
        return $this->container['waitPostInstallFinish'];
    }

    /**
    * Sets waitPostInstallFinish
    *
    * @param bool|null $waitPostInstallFinish **参数解释：** 该参数用于控制重置/纳管/批量重置节点时， **post-install脚本执行完成前允许节点调度** 的行为。当操作的节点属于节点池时，以节点池相关配置为准。当该参数未设置或者为false时，在kubernetes节点就绪时，容器即可被调度到可用节点。当该参数为true时，在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **约束限制：** 不涉及  **取值范围：** - false：在kubernetes节点就绪时，容器即可被调度到可用节点。           - true：在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **默认取值：** false
    *
    * @return $this
    */
    public function setWaitPostInstallFinish($waitPostInstallFinish)
    {
        $this->container['waitPostInstallFinish'] = $waitPostInstallFinish;
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

