<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskCheckSettingsItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskCheckSettingsItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cfgKey  **参数解释:** 规则集对应的编译配置条件键。 **约束限制:** 不涉及。 **取值范围:** - compileTool：编译工具。 - buildToolVersion：编译工具版本。 - compileScriptCmd：编译命令。 **默认取值：** 不涉及。
    * status  **参数解释:** 当前检查参数key对应的开启状态，填写\"on\"即可。 **约束限制:** 不涉及。 **取值范围:** \"on\"。 **默认取值：** 不涉及。
    * cfgValue  **参数解释:** 规则集对应的编译配置值。 **约束限制:** cfg_key为compileTool、buildToolVersion时，cfg_value的值必填。 **取值范围:** - ant1.10.1-jdk1.8: ant镜像。 - ant1.10.13-jdk1.8: ant镜像。 - ant1.10.3-jdk1.8: ant镜像。 - ant1.9.4-jdk1.8: ant镜像。 - cmake2.8.12-gcc4.8.5: C++镜像。 - cmake2.8.12-gcc5.5.0: C++镜像。 - cmake2.8.12-gcc6.4.0: C++镜像。 - cmake2.8.12-gcc7.3.0: C++镜像。 - cmake3.10.1-gcc4.8.5: C++镜像。 - cmake3.10.1-gcc5.5.0: C++镜像。 - cmake3.10.1-gcc6.4.0: C++镜像。 - cmake3.10.1-gcc7.3.0: C++镜像。 - cmake3.15.5-gcc7.5.0: C++镜像。 - cmake3.15.5-gcc8.3.0: C++镜像。 - cmake3.16.0-gcc9.2.0: C++镜像。 - dotnetcore2.2: C#镜像。 - dotnetcore3.0: C#镜像。 - dotnetcore3.1: C#镜像。 - dotnetcore5.0: C#镜像。 - dotnetcore6.0: C#镜像。 - dotnetcore7.0: C#镜像。 - dotnetcore8.0: C#镜像。 - dotnetcore9.0: C#镜像。 - go-1.10.3: go镜像。 - go-1.11.6: go镜像。 - go-1.12.1: go镜像。 - go-1.23: go镜像。 - gradle2.13-jdk1.8: gradle镜像。 - gradle2.14.1-jdk1.8: gradle镜像。 - gradle3.3-jdk1.8: gradle镜像。 - gradle4.1-jdk1.8: gradle镜像。 - gradle4.2-jdk1.8: gradle镜像。 - gradle4.3-jdk1.8: gradle镜像。 - gradle4.4-jdk1.8: gradle镜像。 - gradle4.5-jdk1.8: gradle镜像。 - gradle4.6-jdk1.8: gradle镜像。 - gradle4.7-jdk1.8: gradle镜像。 - gradle4.8-jdk1.8: gradle镜像。 - gradle4.8-jdk1.9: gradle镜像。 - gradle4.9-jdk1.8: gradle镜像。 - gradle4.9-jdk1.9: gradle镜像。 - gradlew: gradle镜像。 - maven3.3.1-jdk7: maven镜像。 - maven3.5.3-jdk1.10: maven镜像。 - maven3.5.3-jdk1.11: maven镜像。 - maven3.5.3-jdk1.7: maven镜像。 - maven3.5.3-jdk1.8: maven镜像。 - maven3.5.3-jdk1.9: maven镜像。 - maven3.5.3-jdk7: maven镜像。 - maven3.5.3-jdk8-open: maven镜像。 - maven3.6.1-jdk10: maven镜像。 - maven3.6.1-jdk9: maven镜像。 - maven3.6.3-jdk11: maven镜像。 - maven3.8.5-jdk1.17: maven镜像。 - maven3.8.5-jdk17: maven镜像。 - maven3.9.5-jdk21: maven镜像。 - mono6-msbuild16-dotnetcoresdk2.1: C#镜像。 - mono6-msbuild16-dotnetcoresdk2.2: C#镜像。 - mono6-msbuild16-dotnetcoresdk3.0: C#镜像。 - mono6-msbuild16-dotnetcoresdk3.1: C#镜像。 - mono6-msbuild16-dotnetcoresdk5.0: C#镜像。 - mono6-msbuild16-dotnetcoresdk6.0: C#镜像。 - msbuild15-dotnetframework3.5: C#镜像。 - msbuild15-dotnetframework4.7.2: C#镜像。 - msbuild16-dotnetframework4.8: C#镜像。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cfgKey' => 'string',
            'status' => 'string',
            'cfgValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cfgKey  **参数解释:** 规则集对应的编译配置条件键。 **约束限制:** 不涉及。 **取值范围:** - compileTool：编译工具。 - buildToolVersion：编译工具版本。 - compileScriptCmd：编译命令。 **默认取值：** 不涉及。
    * status  **参数解释:** 当前检查参数key对应的开启状态，填写\"on\"即可。 **约束限制:** 不涉及。 **取值范围:** \"on\"。 **默认取值：** 不涉及。
    * cfgValue  **参数解释:** 规则集对应的编译配置值。 **约束限制:** cfg_key为compileTool、buildToolVersion时，cfg_value的值必填。 **取值范围:** - ant1.10.1-jdk1.8: ant镜像。 - ant1.10.13-jdk1.8: ant镜像。 - ant1.10.3-jdk1.8: ant镜像。 - ant1.9.4-jdk1.8: ant镜像。 - cmake2.8.12-gcc4.8.5: C++镜像。 - cmake2.8.12-gcc5.5.0: C++镜像。 - cmake2.8.12-gcc6.4.0: C++镜像。 - cmake2.8.12-gcc7.3.0: C++镜像。 - cmake3.10.1-gcc4.8.5: C++镜像。 - cmake3.10.1-gcc5.5.0: C++镜像。 - cmake3.10.1-gcc6.4.0: C++镜像。 - cmake3.10.1-gcc7.3.0: C++镜像。 - cmake3.15.5-gcc7.5.0: C++镜像。 - cmake3.15.5-gcc8.3.0: C++镜像。 - cmake3.16.0-gcc9.2.0: C++镜像。 - dotnetcore2.2: C#镜像。 - dotnetcore3.0: C#镜像。 - dotnetcore3.1: C#镜像。 - dotnetcore5.0: C#镜像。 - dotnetcore6.0: C#镜像。 - dotnetcore7.0: C#镜像。 - dotnetcore8.0: C#镜像。 - dotnetcore9.0: C#镜像。 - go-1.10.3: go镜像。 - go-1.11.6: go镜像。 - go-1.12.1: go镜像。 - go-1.23: go镜像。 - gradle2.13-jdk1.8: gradle镜像。 - gradle2.14.1-jdk1.8: gradle镜像。 - gradle3.3-jdk1.8: gradle镜像。 - gradle4.1-jdk1.8: gradle镜像。 - gradle4.2-jdk1.8: gradle镜像。 - gradle4.3-jdk1.8: gradle镜像。 - gradle4.4-jdk1.8: gradle镜像。 - gradle4.5-jdk1.8: gradle镜像。 - gradle4.6-jdk1.8: gradle镜像。 - gradle4.7-jdk1.8: gradle镜像。 - gradle4.8-jdk1.8: gradle镜像。 - gradle4.8-jdk1.9: gradle镜像。 - gradle4.9-jdk1.8: gradle镜像。 - gradle4.9-jdk1.9: gradle镜像。 - gradlew: gradle镜像。 - maven3.3.1-jdk7: maven镜像。 - maven3.5.3-jdk1.10: maven镜像。 - maven3.5.3-jdk1.11: maven镜像。 - maven3.5.3-jdk1.7: maven镜像。 - maven3.5.3-jdk1.8: maven镜像。 - maven3.5.3-jdk1.9: maven镜像。 - maven3.5.3-jdk7: maven镜像。 - maven3.5.3-jdk8-open: maven镜像。 - maven3.6.1-jdk10: maven镜像。 - maven3.6.1-jdk9: maven镜像。 - maven3.6.3-jdk11: maven镜像。 - maven3.8.5-jdk1.17: maven镜像。 - maven3.8.5-jdk17: maven镜像。 - maven3.9.5-jdk21: maven镜像。 - mono6-msbuild16-dotnetcoresdk2.1: C#镜像。 - mono6-msbuild16-dotnetcoresdk2.2: C#镜像。 - mono6-msbuild16-dotnetcoresdk3.0: C#镜像。 - mono6-msbuild16-dotnetcoresdk3.1: C#镜像。 - mono6-msbuild16-dotnetcoresdk5.0: C#镜像。 - mono6-msbuild16-dotnetcoresdk6.0: C#镜像。 - msbuild15-dotnetframework3.5: C#镜像。 - msbuild15-dotnetframework4.7.2: C#镜像。 - msbuild16-dotnetframework4.8: C#镜像。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cfgKey' => null,
        'status' => null,
        'cfgValue' => null
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
    * cfgKey  **参数解释:** 规则集对应的编译配置条件键。 **约束限制:** 不涉及。 **取值范围:** - compileTool：编译工具。 - buildToolVersion：编译工具版本。 - compileScriptCmd：编译命令。 **默认取值：** 不涉及。
    * status  **参数解释:** 当前检查参数key对应的开启状态，填写\"on\"即可。 **约束限制:** 不涉及。 **取值范围:** \"on\"。 **默认取值：** 不涉及。
    * cfgValue  **参数解释:** 规则集对应的编译配置值。 **约束限制:** cfg_key为compileTool、buildToolVersion时，cfg_value的值必填。 **取值范围:** - ant1.10.1-jdk1.8: ant镜像。 - ant1.10.13-jdk1.8: ant镜像。 - ant1.10.3-jdk1.8: ant镜像。 - ant1.9.4-jdk1.8: ant镜像。 - cmake2.8.12-gcc4.8.5: C++镜像。 - cmake2.8.12-gcc5.5.0: C++镜像。 - cmake2.8.12-gcc6.4.0: C++镜像。 - cmake2.8.12-gcc7.3.0: C++镜像。 - cmake3.10.1-gcc4.8.5: C++镜像。 - cmake3.10.1-gcc5.5.0: C++镜像。 - cmake3.10.1-gcc6.4.0: C++镜像。 - cmake3.10.1-gcc7.3.0: C++镜像。 - cmake3.15.5-gcc7.5.0: C++镜像。 - cmake3.15.5-gcc8.3.0: C++镜像。 - cmake3.16.0-gcc9.2.0: C++镜像。 - dotnetcore2.2: C#镜像。 - dotnetcore3.0: C#镜像。 - dotnetcore3.1: C#镜像。 - dotnetcore5.0: C#镜像。 - dotnetcore6.0: C#镜像。 - dotnetcore7.0: C#镜像。 - dotnetcore8.0: C#镜像。 - dotnetcore9.0: C#镜像。 - go-1.10.3: go镜像。 - go-1.11.6: go镜像。 - go-1.12.1: go镜像。 - go-1.23: go镜像。 - gradle2.13-jdk1.8: gradle镜像。 - gradle2.14.1-jdk1.8: gradle镜像。 - gradle3.3-jdk1.8: gradle镜像。 - gradle4.1-jdk1.8: gradle镜像。 - gradle4.2-jdk1.8: gradle镜像。 - gradle4.3-jdk1.8: gradle镜像。 - gradle4.4-jdk1.8: gradle镜像。 - gradle4.5-jdk1.8: gradle镜像。 - gradle4.6-jdk1.8: gradle镜像。 - gradle4.7-jdk1.8: gradle镜像。 - gradle4.8-jdk1.8: gradle镜像。 - gradle4.8-jdk1.9: gradle镜像。 - gradle4.9-jdk1.8: gradle镜像。 - gradle4.9-jdk1.9: gradle镜像。 - gradlew: gradle镜像。 - maven3.3.1-jdk7: maven镜像。 - maven3.5.3-jdk1.10: maven镜像。 - maven3.5.3-jdk1.11: maven镜像。 - maven3.5.3-jdk1.7: maven镜像。 - maven3.5.3-jdk1.8: maven镜像。 - maven3.5.3-jdk1.9: maven镜像。 - maven3.5.3-jdk7: maven镜像。 - maven3.5.3-jdk8-open: maven镜像。 - maven3.6.1-jdk10: maven镜像。 - maven3.6.1-jdk9: maven镜像。 - maven3.6.3-jdk11: maven镜像。 - maven3.8.5-jdk1.17: maven镜像。 - maven3.8.5-jdk17: maven镜像。 - maven3.9.5-jdk21: maven镜像。 - mono6-msbuild16-dotnetcoresdk2.1: C#镜像。 - mono6-msbuild16-dotnetcoresdk2.2: C#镜像。 - mono6-msbuild16-dotnetcoresdk3.0: C#镜像。 - mono6-msbuild16-dotnetcoresdk3.1: C#镜像。 - mono6-msbuild16-dotnetcoresdk5.0: C#镜像。 - mono6-msbuild16-dotnetcoresdk6.0: C#镜像。 - msbuild15-dotnetframework3.5: C#镜像。 - msbuild15-dotnetframework4.7.2: C#镜像。 - msbuild16-dotnetframework4.8: C#镜像。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cfgKey' => 'cfg_key',
            'status' => 'status',
            'cfgValue' => 'cfg_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cfgKey  **参数解释:** 规则集对应的编译配置条件键。 **约束限制:** 不涉及。 **取值范围:** - compileTool：编译工具。 - buildToolVersion：编译工具版本。 - compileScriptCmd：编译命令。 **默认取值：** 不涉及。
    * status  **参数解释:** 当前检查参数key对应的开启状态，填写\"on\"即可。 **约束限制:** 不涉及。 **取值范围:** \"on\"。 **默认取值：** 不涉及。
    * cfgValue  **参数解释:** 规则集对应的编译配置值。 **约束限制:** cfg_key为compileTool、buildToolVersion时，cfg_value的值必填。 **取值范围:** - ant1.10.1-jdk1.8: ant镜像。 - ant1.10.13-jdk1.8: ant镜像。 - ant1.10.3-jdk1.8: ant镜像。 - ant1.9.4-jdk1.8: ant镜像。 - cmake2.8.12-gcc4.8.5: C++镜像。 - cmake2.8.12-gcc5.5.0: C++镜像。 - cmake2.8.12-gcc6.4.0: C++镜像。 - cmake2.8.12-gcc7.3.0: C++镜像。 - cmake3.10.1-gcc4.8.5: C++镜像。 - cmake3.10.1-gcc5.5.0: C++镜像。 - cmake3.10.1-gcc6.4.0: C++镜像。 - cmake3.10.1-gcc7.3.0: C++镜像。 - cmake3.15.5-gcc7.5.0: C++镜像。 - cmake3.15.5-gcc8.3.0: C++镜像。 - cmake3.16.0-gcc9.2.0: C++镜像。 - dotnetcore2.2: C#镜像。 - dotnetcore3.0: C#镜像。 - dotnetcore3.1: C#镜像。 - dotnetcore5.0: C#镜像。 - dotnetcore6.0: C#镜像。 - dotnetcore7.0: C#镜像。 - dotnetcore8.0: C#镜像。 - dotnetcore9.0: C#镜像。 - go-1.10.3: go镜像。 - go-1.11.6: go镜像。 - go-1.12.1: go镜像。 - go-1.23: go镜像。 - gradle2.13-jdk1.8: gradle镜像。 - gradle2.14.1-jdk1.8: gradle镜像。 - gradle3.3-jdk1.8: gradle镜像。 - gradle4.1-jdk1.8: gradle镜像。 - gradle4.2-jdk1.8: gradle镜像。 - gradle4.3-jdk1.8: gradle镜像。 - gradle4.4-jdk1.8: gradle镜像。 - gradle4.5-jdk1.8: gradle镜像。 - gradle4.6-jdk1.8: gradle镜像。 - gradle4.7-jdk1.8: gradle镜像。 - gradle4.8-jdk1.8: gradle镜像。 - gradle4.8-jdk1.9: gradle镜像。 - gradle4.9-jdk1.8: gradle镜像。 - gradle4.9-jdk1.9: gradle镜像。 - gradlew: gradle镜像。 - maven3.3.1-jdk7: maven镜像。 - maven3.5.3-jdk1.10: maven镜像。 - maven3.5.3-jdk1.11: maven镜像。 - maven3.5.3-jdk1.7: maven镜像。 - maven3.5.3-jdk1.8: maven镜像。 - maven3.5.3-jdk1.9: maven镜像。 - maven3.5.3-jdk7: maven镜像。 - maven3.5.3-jdk8-open: maven镜像。 - maven3.6.1-jdk10: maven镜像。 - maven3.6.1-jdk9: maven镜像。 - maven3.6.3-jdk11: maven镜像。 - maven3.8.5-jdk1.17: maven镜像。 - maven3.8.5-jdk17: maven镜像。 - maven3.9.5-jdk21: maven镜像。 - mono6-msbuild16-dotnetcoresdk2.1: C#镜像。 - mono6-msbuild16-dotnetcoresdk2.2: C#镜像。 - mono6-msbuild16-dotnetcoresdk3.0: C#镜像。 - mono6-msbuild16-dotnetcoresdk3.1: C#镜像。 - mono6-msbuild16-dotnetcoresdk5.0: C#镜像。 - mono6-msbuild16-dotnetcoresdk6.0: C#镜像。 - msbuild15-dotnetframework3.5: C#镜像。 - msbuild15-dotnetframework4.7.2: C#镜像。 - msbuild16-dotnetframework4.8: C#镜像。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'cfgKey' => 'setCfgKey',
            'status' => 'setStatus',
            'cfgValue' => 'setCfgValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cfgKey  **参数解释:** 规则集对应的编译配置条件键。 **约束限制:** 不涉及。 **取值范围:** - compileTool：编译工具。 - buildToolVersion：编译工具版本。 - compileScriptCmd：编译命令。 **默认取值：** 不涉及。
    * status  **参数解释:** 当前检查参数key对应的开启状态，填写\"on\"即可。 **约束限制:** 不涉及。 **取值范围:** \"on\"。 **默认取值：** 不涉及。
    * cfgValue  **参数解释:** 规则集对应的编译配置值。 **约束限制:** cfg_key为compileTool、buildToolVersion时，cfg_value的值必填。 **取值范围:** - ant1.10.1-jdk1.8: ant镜像。 - ant1.10.13-jdk1.8: ant镜像。 - ant1.10.3-jdk1.8: ant镜像。 - ant1.9.4-jdk1.8: ant镜像。 - cmake2.8.12-gcc4.8.5: C++镜像。 - cmake2.8.12-gcc5.5.0: C++镜像。 - cmake2.8.12-gcc6.4.0: C++镜像。 - cmake2.8.12-gcc7.3.0: C++镜像。 - cmake3.10.1-gcc4.8.5: C++镜像。 - cmake3.10.1-gcc5.5.0: C++镜像。 - cmake3.10.1-gcc6.4.0: C++镜像。 - cmake3.10.1-gcc7.3.0: C++镜像。 - cmake3.15.5-gcc7.5.0: C++镜像。 - cmake3.15.5-gcc8.3.0: C++镜像。 - cmake3.16.0-gcc9.2.0: C++镜像。 - dotnetcore2.2: C#镜像。 - dotnetcore3.0: C#镜像。 - dotnetcore3.1: C#镜像。 - dotnetcore5.0: C#镜像。 - dotnetcore6.0: C#镜像。 - dotnetcore7.0: C#镜像。 - dotnetcore8.0: C#镜像。 - dotnetcore9.0: C#镜像。 - go-1.10.3: go镜像。 - go-1.11.6: go镜像。 - go-1.12.1: go镜像。 - go-1.23: go镜像。 - gradle2.13-jdk1.8: gradle镜像。 - gradle2.14.1-jdk1.8: gradle镜像。 - gradle3.3-jdk1.8: gradle镜像。 - gradle4.1-jdk1.8: gradle镜像。 - gradle4.2-jdk1.8: gradle镜像。 - gradle4.3-jdk1.8: gradle镜像。 - gradle4.4-jdk1.8: gradle镜像。 - gradle4.5-jdk1.8: gradle镜像。 - gradle4.6-jdk1.8: gradle镜像。 - gradle4.7-jdk1.8: gradle镜像。 - gradle4.8-jdk1.8: gradle镜像。 - gradle4.8-jdk1.9: gradle镜像。 - gradle4.9-jdk1.8: gradle镜像。 - gradle4.9-jdk1.9: gradle镜像。 - gradlew: gradle镜像。 - maven3.3.1-jdk7: maven镜像。 - maven3.5.3-jdk1.10: maven镜像。 - maven3.5.3-jdk1.11: maven镜像。 - maven3.5.3-jdk1.7: maven镜像。 - maven3.5.3-jdk1.8: maven镜像。 - maven3.5.3-jdk1.9: maven镜像。 - maven3.5.3-jdk7: maven镜像。 - maven3.5.3-jdk8-open: maven镜像。 - maven3.6.1-jdk10: maven镜像。 - maven3.6.1-jdk9: maven镜像。 - maven3.6.3-jdk11: maven镜像。 - maven3.8.5-jdk1.17: maven镜像。 - maven3.8.5-jdk17: maven镜像。 - maven3.9.5-jdk21: maven镜像。 - mono6-msbuild16-dotnetcoresdk2.1: C#镜像。 - mono6-msbuild16-dotnetcoresdk2.2: C#镜像。 - mono6-msbuild16-dotnetcoresdk3.0: C#镜像。 - mono6-msbuild16-dotnetcoresdk3.1: C#镜像。 - mono6-msbuild16-dotnetcoresdk5.0: C#镜像。 - mono6-msbuild16-dotnetcoresdk6.0: C#镜像。 - msbuild15-dotnetframework3.5: C#镜像。 - msbuild15-dotnetframework4.7.2: C#镜像。 - msbuild16-dotnetframework4.8: C#镜像。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'cfgKey' => 'getCfgKey',
            'status' => 'getStatus',
            'cfgValue' => 'getCfgValue'
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
        $this->container['cfgKey'] = isset($data['cfgKey']) ? $data['cfgKey'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['cfgValue'] = isset($data['cfgValue']) ? $data['cfgValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cfgKey']) && (mb_strlen($this->container['cfgKey']) > 50)) {
                $invalidProperties[] = "invalid value for 'cfgKey', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['cfgKey']) && (mb_strlen($this->container['cfgKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'cfgKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 3)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cfgValue']) && (mb_strlen($this->container['cfgValue']) > 1000)) {
                $invalidProperties[] = "invalid value for 'cfgValue', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['cfgValue']) && (mb_strlen($this->container['cfgValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'cfgValue', the character length must be bigger than or equal to 1.";
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
    * Gets cfgKey
    *  **参数解释:** 规则集对应的编译配置条件键。 **约束限制:** 不涉及。 **取值范围:** - compileTool：编译工具。 - buildToolVersion：编译工具版本。 - compileScriptCmd：编译命令。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getCfgKey()
    {
        return $this->container['cfgKey'];
    }

    /**
    * Sets cfgKey
    *
    * @param string|null $cfgKey **参数解释:** 规则集对应的编译配置条件键。 **约束限制:** 不涉及。 **取值范围:** - compileTool：编译工具。 - buildToolVersion：编译工具版本。 - compileScriptCmd：编译命令。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setCfgKey($cfgKey)
    {
        $this->container['cfgKey'] = $cfgKey;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释:** 当前检查参数key对应的开启状态，填写\"on\"即可。 **约束限制:** 不涉及。 **取值范围:** \"on\"。 **默认取值：** 不涉及。
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
    * @param string|null $status **参数解释:** 当前检查参数key对应的开启状态，填写\"on\"即可。 **约束限制:** 不涉及。 **取值范围:** \"on\"。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets cfgValue
    *  **参数解释:** 规则集对应的编译配置值。 **约束限制:** cfg_key为compileTool、buildToolVersion时，cfg_value的值必填。 **取值范围:** - ant1.10.1-jdk1.8: ant镜像。 - ant1.10.13-jdk1.8: ant镜像。 - ant1.10.3-jdk1.8: ant镜像。 - ant1.9.4-jdk1.8: ant镜像。 - cmake2.8.12-gcc4.8.5: C++镜像。 - cmake2.8.12-gcc5.5.0: C++镜像。 - cmake2.8.12-gcc6.4.0: C++镜像。 - cmake2.8.12-gcc7.3.0: C++镜像。 - cmake3.10.1-gcc4.8.5: C++镜像。 - cmake3.10.1-gcc5.5.0: C++镜像。 - cmake3.10.1-gcc6.4.0: C++镜像。 - cmake3.10.1-gcc7.3.0: C++镜像。 - cmake3.15.5-gcc7.5.0: C++镜像。 - cmake3.15.5-gcc8.3.0: C++镜像。 - cmake3.16.0-gcc9.2.0: C++镜像。 - dotnetcore2.2: C#镜像。 - dotnetcore3.0: C#镜像。 - dotnetcore3.1: C#镜像。 - dotnetcore5.0: C#镜像。 - dotnetcore6.0: C#镜像。 - dotnetcore7.0: C#镜像。 - dotnetcore8.0: C#镜像。 - dotnetcore9.0: C#镜像。 - go-1.10.3: go镜像。 - go-1.11.6: go镜像。 - go-1.12.1: go镜像。 - go-1.23: go镜像。 - gradle2.13-jdk1.8: gradle镜像。 - gradle2.14.1-jdk1.8: gradle镜像。 - gradle3.3-jdk1.8: gradle镜像。 - gradle4.1-jdk1.8: gradle镜像。 - gradle4.2-jdk1.8: gradle镜像。 - gradle4.3-jdk1.8: gradle镜像。 - gradle4.4-jdk1.8: gradle镜像。 - gradle4.5-jdk1.8: gradle镜像。 - gradle4.6-jdk1.8: gradle镜像。 - gradle4.7-jdk1.8: gradle镜像。 - gradle4.8-jdk1.8: gradle镜像。 - gradle4.8-jdk1.9: gradle镜像。 - gradle4.9-jdk1.8: gradle镜像。 - gradle4.9-jdk1.9: gradle镜像。 - gradlew: gradle镜像。 - maven3.3.1-jdk7: maven镜像。 - maven3.5.3-jdk1.10: maven镜像。 - maven3.5.3-jdk1.11: maven镜像。 - maven3.5.3-jdk1.7: maven镜像。 - maven3.5.3-jdk1.8: maven镜像。 - maven3.5.3-jdk1.9: maven镜像。 - maven3.5.3-jdk7: maven镜像。 - maven3.5.3-jdk8-open: maven镜像。 - maven3.6.1-jdk10: maven镜像。 - maven3.6.1-jdk9: maven镜像。 - maven3.6.3-jdk11: maven镜像。 - maven3.8.5-jdk1.17: maven镜像。 - maven3.8.5-jdk17: maven镜像。 - maven3.9.5-jdk21: maven镜像。 - mono6-msbuild16-dotnetcoresdk2.1: C#镜像。 - mono6-msbuild16-dotnetcoresdk2.2: C#镜像。 - mono6-msbuild16-dotnetcoresdk3.0: C#镜像。 - mono6-msbuild16-dotnetcoresdk3.1: C#镜像。 - mono6-msbuild16-dotnetcoresdk5.0: C#镜像。 - mono6-msbuild16-dotnetcoresdk6.0: C#镜像。 - msbuild15-dotnetframework3.5: C#镜像。 - msbuild15-dotnetframework4.7.2: C#镜像。 - msbuild16-dotnetframework4.8: C#镜像。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getCfgValue()
    {
        return $this->container['cfgValue'];
    }

    /**
    * Sets cfgValue
    *
    * @param string|null $cfgValue **参数解释:** 规则集对应的编译配置值。 **约束限制:** cfg_key为compileTool、buildToolVersion时，cfg_value的值必填。 **取值范围:** - ant1.10.1-jdk1.8: ant镜像。 - ant1.10.13-jdk1.8: ant镜像。 - ant1.10.3-jdk1.8: ant镜像。 - ant1.9.4-jdk1.8: ant镜像。 - cmake2.8.12-gcc4.8.5: C++镜像。 - cmake2.8.12-gcc5.5.0: C++镜像。 - cmake2.8.12-gcc6.4.0: C++镜像。 - cmake2.8.12-gcc7.3.0: C++镜像。 - cmake3.10.1-gcc4.8.5: C++镜像。 - cmake3.10.1-gcc5.5.0: C++镜像。 - cmake3.10.1-gcc6.4.0: C++镜像。 - cmake3.10.1-gcc7.3.0: C++镜像。 - cmake3.15.5-gcc7.5.0: C++镜像。 - cmake3.15.5-gcc8.3.0: C++镜像。 - cmake3.16.0-gcc9.2.0: C++镜像。 - dotnetcore2.2: C#镜像。 - dotnetcore3.0: C#镜像。 - dotnetcore3.1: C#镜像。 - dotnetcore5.0: C#镜像。 - dotnetcore6.0: C#镜像。 - dotnetcore7.0: C#镜像。 - dotnetcore8.0: C#镜像。 - dotnetcore9.0: C#镜像。 - go-1.10.3: go镜像。 - go-1.11.6: go镜像。 - go-1.12.1: go镜像。 - go-1.23: go镜像。 - gradle2.13-jdk1.8: gradle镜像。 - gradle2.14.1-jdk1.8: gradle镜像。 - gradle3.3-jdk1.8: gradle镜像。 - gradle4.1-jdk1.8: gradle镜像。 - gradle4.2-jdk1.8: gradle镜像。 - gradle4.3-jdk1.8: gradle镜像。 - gradle4.4-jdk1.8: gradle镜像。 - gradle4.5-jdk1.8: gradle镜像。 - gradle4.6-jdk1.8: gradle镜像。 - gradle4.7-jdk1.8: gradle镜像。 - gradle4.8-jdk1.8: gradle镜像。 - gradle4.8-jdk1.9: gradle镜像。 - gradle4.9-jdk1.8: gradle镜像。 - gradle4.9-jdk1.9: gradle镜像。 - gradlew: gradle镜像。 - maven3.3.1-jdk7: maven镜像。 - maven3.5.3-jdk1.10: maven镜像。 - maven3.5.3-jdk1.11: maven镜像。 - maven3.5.3-jdk1.7: maven镜像。 - maven3.5.3-jdk1.8: maven镜像。 - maven3.5.3-jdk1.9: maven镜像。 - maven3.5.3-jdk7: maven镜像。 - maven3.5.3-jdk8-open: maven镜像。 - maven3.6.1-jdk10: maven镜像。 - maven3.6.1-jdk9: maven镜像。 - maven3.6.3-jdk11: maven镜像。 - maven3.8.5-jdk1.17: maven镜像。 - maven3.8.5-jdk17: maven镜像。 - maven3.9.5-jdk21: maven镜像。 - mono6-msbuild16-dotnetcoresdk2.1: C#镜像。 - mono6-msbuild16-dotnetcoresdk2.2: C#镜像。 - mono6-msbuild16-dotnetcoresdk3.0: C#镜像。 - mono6-msbuild16-dotnetcoresdk3.1: C#镜像。 - mono6-msbuild16-dotnetcoresdk5.0: C#镜像。 - mono6-msbuild16-dotnetcoresdk6.0: C#镜像。 - msbuild15-dotnetframework3.5: C#镜像。 - msbuild15-dotnetframework4.7.2: C#镜像。 - msbuild16-dotnetframework4.8: C#镜像。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setCfgValue($cfgValue)
    {
        $this->container['cfgValue'] = $cfgValue;
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

