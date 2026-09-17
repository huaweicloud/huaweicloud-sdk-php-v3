<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InPlaceMigrateNodeExtendParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InPlaceMigrateNodeExtendParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alphaCcePreInstall  **参数解释**： 安装前执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```  **取值范围**： 不涉及 **默认取值**： 不涉及
    * alphaCcePostInstall  **参数解释**： 安装后执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```  **取值范围**： 不涉及 **默认取值**： 不涉及
    * waitPostInstallFinish  **参数解释：** 该参数用于控制腾挪节点时， **post-install脚本执行完成前允许节点调度** 的行为。当该参数未设置或者为false时，在kubernetes节点就绪时，容器即可被调度到可用节点。当该参数为true时，在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。 **约束限制：** 不涉及 **取值范围：** - false：在kubernetes节点就绪时，容器即可被调度到可用节点。           - true：在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **默认取值：** false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alphaCcePreInstall' => 'string',
            'alphaCcePostInstall' => 'string',
            'waitPostInstallFinish' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alphaCcePreInstall  **参数解释**： 安装前执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```  **取值范围**： 不涉及 **默认取值**： 不涉及
    * alphaCcePostInstall  **参数解释**： 安装后执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```  **取值范围**： 不涉及 **默认取值**： 不涉及
    * waitPostInstallFinish  **参数解释：** 该参数用于控制腾挪节点时， **post-install脚本执行完成前允许节点调度** 的行为。当该参数未设置或者为false时，在kubernetes节点就绪时，容器即可被调度到可用节点。当该参数为true时，在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。 **约束限制：** 不涉及 **取值范围：** - false：在kubernetes节点就绪时，容器即可被调度到可用节点。           - true：在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **默认取值：** false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alphaCcePreInstall' => null,
        'alphaCcePostInstall' => null,
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
    * alphaCcePreInstall  **参数解释**： 安装前执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```  **取值范围**： 不涉及 **默认取值**： 不涉及
    * alphaCcePostInstall  **参数解释**： 安装后执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```  **取值范围**： 不涉及 **默认取值**： 不涉及
    * waitPostInstallFinish  **参数解释：** 该参数用于控制腾挪节点时， **post-install脚本执行完成前允许节点调度** 的行为。当该参数未设置或者为false时，在kubernetes节点就绪时，容器即可被调度到可用节点。当该参数为true时，在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。 **约束限制：** 不涉及 **取值范围：** - false：在kubernetes节点就绪时，容器即可被调度到可用节点。           - true：在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **默认取值：** false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alphaCcePreInstall' => 'alpha.cce/preInstall',
            'alphaCcePostInstall' => 'alpha.cce/postInstall',
            'waitPostInstallFinish' => 'waitPostInstallFinish'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alphaCcePreInstall  **参数解释**： 安装前执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```  **取值范围**： 不涉及 **默认取值**： 不涉及
    * alphaCcePostInstall  **参数解释**： 安装后执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```  **取值范围**： 不涉及 **默认取值**： 不涉及
    * waitPostInstallFinish  **参数解释：** 该参数用于控制腾挪节点时， **post-install脚本执行完成前允许节点调度** 的行为。当该参数未设置或者为false时，在kubernetes节点就绪时，容器即可被调度到可用节点。当该参数为true时，在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。 **约束限制：** 不涉及 **取值范围：** - false：在kubernetes节点就绪时，容器即可被调度到可用节点。           - true：在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **默认取值：** false
    *
    * @var string[]
    */
    protected static $setters = [
            'alphaCcePreInstall' => 'setAlphaCcePreInstall',
            'alphaCcePostInstall' => 'setAlphaCcePostInstall',
            'waitPostInstallFinish' => 'setWaitPostInstallFinish'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alphaCcePreInstall  **参数解释**： 安装前执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```  **取值范围**： 不涉及 **默认取值**： 不涉及
    * alphaCcePostInstall  **参数解释**： 安装后执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```  **取值范围**： 不涉及 **默认取值**： 不涉及
    * waitPostInstallFinish  **参数解释：** 该参数用于控制腾挪节点时， **post-install脚本执行完成前允许节点调度** 的行为。当该参数未设置或者为false时，在kubernetes节点就绪时，容器即可被调度到可用节点。当该参数为true时，在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。 **约束限制：** 不涉及 **取值范围：** - false：在kubernetes节点就绪时，容器即可被调度到可用节点。           - true：在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **默认取值：** false
    *
    * @var string[]
    */
    protected static $getters = [
            'alphaCcePreInstall' => 'getAlphaCcePreInstall',
            'alphaCcePostInstall' => 'getAlphaCcePostInstall',
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
        $this->container['alphaCcePreInstall'] = isset($data['alphaCcePreInstall']) ? $data['alphaCcePreInstall'] : null;
        $this->container['alphaCcePostInstall'] = isset($data['alphaCcePostInstall']) ? $data['alphaCcePostInstall'] : null;
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
            if (!is_null($this->container['alphaCcePreInstall']) && (mb_strlen($this->container['alphaCcePreInstall']) > 10240)) {
                $invalidProperties[] = "invalid value for 'alphaCcePreInstall', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['alphaCcePostInstall']) && (mb_strlen($this->container['alphaCcePostInstall']) > 10240)) {
                $invalidProperties[] = "invalid value for 'alphaCcePostInstall', the character length must be smaller than or equal to 10240.";
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
    * Gets alphaCcePreInstall
    *  **参数解释**： 安装前执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getAlphaCcePreInstall()
    {
        return $this->container['alphaCcePreInstall'];
    }

    /**
    * Sets alphaCcePreInstall
    *
    * @param string|null $alphaCcePreInstall **参数解释**： 安装前执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAlphaCcePreInstall($alphaCcePreInstall)
    {
        $this->container['alphaCcePreInstall'] = $alphaCcePreInstall;
        return $this;
    }

    /**
    * Gets alphaCcePostInstall
    *  **参数解释**： 安装后执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getAlphaCcePostInstall()
    {
        return $this->container['alphaCcePostInstall'];
    }

    /**
    * Sets alphaCcePostInstall
    *
    * @param string|null $alphaCcePostInstall **参数解释**： 安装后执行脚本。 **约束限制**： 安装前/后执行脚本统一计算字符，转码后的字符总数不能超过10240。 输入的值需要经过Base64编码，方法如下：   ```   echo -n \"待编码内容\" | base64   ```  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAlphaCcePostInstall($alphaCcePostInstall)
    {
        $this->container['alphaCcePostInstall'] = $alphaCcePostInstall;
        return $this;
    }

    /**
    * Gets waitPostInstallFinish
    *  **参数解释：** 该参数用于控制腾挪节点时， **post-install脚本执行完成前允许节点调度** 的行为。当该参数未设置或者为false时，在kubernetes节点就绪时，容器即可被调度到可用节点。当该参数为true时，在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。 **约束限制：** 不涉及 **取值范围：** - false：在kubernetes节点就绪时，容器即可被调度到可用节点。           - true：在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **默认取值：** false
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
    * @param bool|null $waitPostInstallFinish **参数解释：** 该参数用于控制腾挪节点时， **post-install脚本执行完成前允许节点调度** 的行为。当该参数未设置或者为false时，在kubernetes节点就绪时，容器即可被调度到可用节点。当该参数为true时，在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。 **约束限制：** 不涉及 **取值范围：** - false：在kubernetes节点就绪时，容器即可被调度到可用节点。           - true：在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **默认取值：** false
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

